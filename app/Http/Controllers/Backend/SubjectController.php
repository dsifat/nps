<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Models\Backend\Subject;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Backend\SubjectDataTable;
use App\Http\Requests\Backend\CreateSubjectRequest;
use App\Http\Requests\Backend\UpdateSubjectRequest;

class SubjectController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Subject';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Subject.
     *
     * @param SubjectDataTable $subjectDataTable
     * @return Response
     */
    public function index(SubjectDataTable $subjectDataTable)
    {
        return $subjectDataTable->render('backend.subjects.index');
    }

    /**
     * Show the form for creating a new Subject.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.subjects.create');
    }

    /**
     * Store a newly created Subject in storage.
     *
     * @param CreateSubjectRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectRequest $request)
    {
        $input = $request->all();

        /** @var Subject $subject */
        $subject = Subject::create($input);

        Flash::success('Subject saved successfully.');

        return redirect(route('backend.subjects.index'));
    }

    /**
     * Display the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('backend.subjects.index'));
        }

        return view('backend.subjects.show')->with('subject', $subject);
    }

    /**
     * Show the form for editing the specified Subject.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('backend.subjects.index'));
        }

        return view('backend.subjects.edit')->with('subject', $subject);
    }

    /**
     * Update the specified Subject in storage.
     *
     * @param  int              $id
     * @param UpdateSubjectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubjectRequest $request)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('backend.subjects.index'));
        }

        $subject->fill($request->all());
        $subject->save();

        Flash::success('Subject updated successfully.');

        return redirect(route('backend.subjects.index'));
    }

    /**
     * Remove the specified Subject from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            Flash::error('Subject not found');

            return redirect(route('backend.subjects.index'));
        }

        $subject->delete();

        Flash::success('Subject deleted successfully.');

        return redirect(route('backend.subjects.index'));
    }
}
