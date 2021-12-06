<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Events\TaskExecuted;
use App\Models\Backend\ScheduleTask;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Backend\ScheduleTaskDataTable;
use App\Http\Requests\Backend\CreateScheduleTaskRequest;
use App\Http\Requests\Backend\UpdateScheduleTaskRequest;

class ScheduleTaskController extends AppBaseController
{
    public function __construct()
    {
        $this->middleware('can:SUPER-ADMIN');
    }

    /**
     * Display a listing of the ScheduleTask.
     *
     * @param ScheduleTaskDataTable $scheduleTaskDataTable
     * @return Response
     */
    public function index(ScheduleTaskDataTable $scheduleTaskDataTable)
    {
        return $scheduleTaskDataTable->render('backend.schedule_tasks.index');
    }

    /**
     * Show the form for creating a new ScheduleTask.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.schedule_tasks.create');
    }

    /**
     * Store a newly created ScheduleTask in storage.
     *
     * @param CreateScheduleTaskRequest $request
     *
     * @return Response
     */
    public function store(CreateScheduleTaskRequest $request)
    {
        $input = $request->all();

        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::create($input);

        Cache::forget('schedule-tasks.active');

        Flash::success('Schedule Task saved successfully.');

        return redirect(route('backend.scheduleTasks.index'));
    }

    /**
     * Display the specified ScheduleTask.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::find($id);

        if (empty($scheduleTask)) {
            Flash::error('Schedule Task not found');

            return redirect(route('backend.scheduleTasks.index'));
        }

        return view('backend.schedule_tasks.show')->with('scheduleTask', $scheduleTask);
    }

    /**
     * Show the form for editing the specified ScheduleTask.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::find($id);

        if (empty($scheduleTask)) {
            Flash::error('Schedule Task not found');

            return redirect(route('backend.scheduleTasks.index'));
        }

        return view('backend.schedule_tasks.edit')->with('scheduleTask', $scheduleTask);
    }

    /**
     * Update the specified ScheduleTask in storage.
     *
     * @param  int              $id
     * @param UpdateScheduleTaskRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateScheduleTaskRequest $request)
    {
        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::find($id);

        if (empty($scheduleTask)) {
            Flash::error('Schedule Task not found');

            return redirect(route('backend.scheduleTasks.index'));
        }

        $scheduleTask->fill($request->all());
        $scheduleTask->save();

        Flash::success('Schedule Task updated successfully.');

        return redirect(route('backend.scheduleTasks.index'));
    }

    /**
     * Remove the specified ScheduleTask from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::find($id);

        if (empty($scheduleTask)) {
            Flash::error('Schedule Task not found');

            return redirect(route('backend.scheduleTasks.index'));
        }

        $scheduleTask->delete();

        Flash::success('Schedule Task deleted successfully.');

        return redirect(route('backend.scheduleTasks.index'));
    }

    /**
     * Run the specified ScheduleTask.
     *
     * @param  int              $id
     *
     * @return Response
     */
    public function runTaskNow($id)
    {
        /** @var ScheduleTask $scheduleTask */
        $scheduleTask = ScheduleTask::find($id);

        if (empty($scheduleTask)) {
            Flash::error('Schedule Task not found');

            return redirect(route('backend.scheduleTasks.index'));
        }

        $start = microtime(true);

        try {
            Artisan::call($scheduleTask->command, $scheduleTask->compileParameters());

            file_put_contents(storage_path($scheduleTask->logPath()), Artisan::output());
        } catch (\Exception $e) {
            file_put_contents(storage_path($scheduleTask->logPath()), $e->getMessage());
        }

        event(new TaskExecuted($scheduleTask, $start));

        Flash::success('Schedule Task run successfully.');

        return redirect(route('backend.scheduleTasks.index'));
    }
}
