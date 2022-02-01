<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\QuestionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateQuestionRequest;
use App\Http\Requests\Backend\UpdateQuestionRequest;
use App\Models\Backend\Question;
use App\Models\Backend\Subject;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class QuestionController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Question';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Question.
     *
     * @param QuestionDataTable $questionDataTable
     * @return Response
     */
    public function index()
    {
        $pageConfigs = [
            'pageHeader' => false,
            'contentLayout' => 'content-left-sidebar',
            'bodyClass' => 'todo-application',
            'layoutWidth' => 'boxed'
        ];

        return view('backend.questions.index', ['pageConfigs' => $pageConfigs]);
    }

    /**
     * Show the form for creating a new Question.
     *
     * @return Response
     */
    public function create()
    {
        $data = [
            'subjects'=> Subject::get()->pluck('name', 'id'),
        ];
        return view('backend.questions.create', $data);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param CreateQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateQuestionRequest $request)
    {

        $input = $request->all();
        /** @var Question $question */
        $subject = Subject::find($request->input('subject'));
        $question = new Question();
        $question->title = $input['title'];
        $question->answer = $input['answer'];
        $question->subject_id = $subject['id'];
        $question->save();

//        $subject->questions()->save($question);
//        $question->save($input);


        Flash::success('Question saved successfully.');

        return redirect(route('backend.questions.index'));
    }

    /**
     * Display the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('backend.questions.index'));
        }

        return view('backend.questions.show')->with('question', $question);
    }

    /**
     * Show the form for editing the specified Question.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('backend.questions.index'));
        }

        return view('backend.questions.edit')->with('question', $question);
    }

    /**
     * Update the specified Question in storage.
     *
     * @param  int              $id
     * @param UpdateQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQuestionRequest $request)
    {
        /** @var Question $question */
        $question = Question::find($id);

        if (empty($question)) {
            Flash::error('Question not found');

            return redirect(route('backend.questions.index'));
        }

        $question->fill($request->all());
        $question->save();

        Flash::success('Question updated successfully.');

        return redirect(route('backend.questions.index'));
    }

    /**
     * Remove the specified Question from storage.
     *
     * @param  int $id
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
            Flash::error('Question not found');

            return redirect(route('backend.questions.index'));
        }

        $question->delete();

        Flash::success('Question deleted successfully.');

        return redirect(route('backend.questions.index'));
    }
}
