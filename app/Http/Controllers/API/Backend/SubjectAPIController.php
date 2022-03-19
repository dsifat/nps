<?php

namespace App\Http\Controllers\API\Backend;

use Response;
use Illuminate\Http\Request;
use App\Models\Backend\Subject;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\SubjectResource;
use App\Http\Requests\API\Backend\CreateSubjectAPIRequest;
use App\Http\Requests\API\Backend\UpdateSubjectAPIRequest;

/**
 * Class SubjectController
 * @package App\Http\Controllers\API\Backend
 */

class SubjectAPIController extends AppBaseController
{
    /**
     * Display a listing of the Subject.
     * GET|HEAD /subjects
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Subject::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $subjects = $query->get();

        return $this->sendResponse(SubjectResource::collection($subjects), 'Subjects retrieved successfully');
    }

    /**
     * Store a newly created Subject in storage.
     * POST /subjects
     *
     * @param CreateSubjectAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSubjectAPIRequest $request)
    {
        $input = $request->all();

        /** @var Subject $subject */
        $subject = Subject::create($input);

        return $this->sendResponse(new SubjectResource($subject), 'Subject saved successfully');
    }

    /**
     * Display the specified Subject.
     * GET|HEAD /subjects/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            return $this->sendError('Subject not found');
        }

        return $this->sendResponse(new SubjectResource($subject), 'Subject retrieved successfully');
    }

    /**
     * Update the specified Subject in storage.
     * PUT/PATCH /subjects/{id}
     *
     * @param int $id
     * @param UpdateSubjectAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubjectAPIRequest $request)
    {
        /** @var Subject $subject */
        $subject = Subject::find($id);

        if (empty($subject)) {
            return $this->sendError('Subject not found');
        }

        $subject->fill($request->all());
        $subject->save();

        return $this->sendResponse(new SubjectResource($subject), 'Subject updated successfully');
    }

    /**
     * Remove the specified Subject from storage.
     * DELETE /subjects/{id}
     *
     * @param int $id
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
            return $this->sendError('Subject not found');
        }

        $subject->delete();

        return $this->sendSuccess('Subject deleted successfully');
    }
}
