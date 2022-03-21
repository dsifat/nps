<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Models\Backend\Topic;
use App\DataTables\Backend\TopicDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Backend\CreateTopicRequest;
use App\Http\Requests\Backend\UpdateTopicRequest;

class TopicController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Topic';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Topic.
     *
     * @param TopicDataTable $topicDataTable
     * @return Response
     */
    public function index(TopicDataTable $topicDataTable)
    {
        return $topicDataTable->render('backend.topics.index');
    }

    /**
     * Show the form for creating a new Topic.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.topics.create');
    }

    /**
     * Store a newly created Topic in storage.
     *
     * @param CreateTopicRequest $request
     *
     * @return Response
     */
    public function store(CreateTopicRequest $request)
    {
        $input = $request->except('parent_id');

        /** @var Topic $topic */
        $topic = Topic::create($input);
        $topic->parent_id = $request['parent_id'];
        $topic->save();

        Flash::success('Topic saved successfully.');

        return redirect(route('backend.topics.index'));
    }

    /**
     * Display the specified Topic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('backend.topics.index'));
        }

        return view('backend.topics.show')->with('topic', $topic);
    }

    /**
     * Show the form for editing the specified Topic.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Topic $topic */
        $data = Topic::findOrFail($id);

        if (empty($data)) {
            Flash::error('Topic not found');

            return redirect(route('backend.topics.index'));
        }

        return view('backend.topics.edit', ['id' => $id, 'data' => $data]);
    }

    /**
     * Update the specified Topic in storage.
     *
     * @param  int              $id
     * @param UpdateTopicRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTopicRequest $request)
    {
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('backend.topics.index'));
        }
        $input = $request->except('_token', '_method');
        $topic->parent_id = $input['parent_id'];
        $topic->name = $input['name'];
        $topic->save();
        Flash::success('Topic updated successfully.');

        return redirect(route('backend.topics.index'));
    }

    /**
     * Remove the specified Topic from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            Flash::error('Topic not found');

            return redirect(route('backend.topics.index'));
        }

        $topic->delete();

        Flash::success('Topic deleted successfully.');

        return redirect(route('backend.topics.index'));
    }
}
