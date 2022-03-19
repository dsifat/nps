<?php

namespace App\Http\Controllers\API\Backend;

use Response;
use Illuminate\Http\Request;
use App\Models\Backend\Question;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\QuestionResource;
use App\Http\Requests\API\Backend\CreateQuestionAPIRequest;
use App\Http\Requests\API\Backend\UpdateQuestionAPIRequest;

/**
 * Class QuestionController
 * @package App\Http\Controllers\API\Backend
 */

class QuestionAPIController extends AppBaseController
{
    /**
     * Display a listing of the Question.
     * GET|HEAD /questions
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Question::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $questions = $query->get();

        return $this->sendResponse(QuestionResource::collection($questions), 'Questions retrieved successfully');
    }

    /**
     * Store a newly created Question in storage.
     * POST /questions
     *
     * @param CreateQuestionAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionAPIRequest $request)
    {
        $input = $request->all();

        /** @var Question $question */
        $question = Question::create($input);

        return $this->sendResponse(new QuestionResource($question), 'Question saved successfully');
    }

    /**
     * Display the specified Question.
     * GET|HEAD /questions/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            return $this->sendError('Question not found');
        }

        return $this->sendResponse(new QuestionResource($question), 'Question retrieved successfully');
    }

    /**
     * Update the specified Question in storage.
     * PUT/PATCH /questions/{id}
     *
     * @param int $id
     * @param UpdateQuestionAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionAPIRequest $request)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            return $this->sendError('Question not found');
        }

        $question->fill($request->all());
        $question->save();

        return $this->sendResponse(new QuestionResource($question), 'Question updated successfully');
    }

    /**
     * Remove the specified Question from storage.
     * DELETE /questions/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            return $this->sendError('Question not found');
        }

        $question->delete();

        return $this->sendSuccess('Question deleted successfully');
    }
}
