<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\CompetitiveSurveyDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateCompetitiveSurveyRequest;
use App\Http\Requests\Backend\UpdateCompetitiveSurveyRequest;
use App\Models\Backend\CompetitiveSurvey;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class CompetitiveSurveyController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'CompetitiveSurvey';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the CompetitiveSurvey.
     *
     * @param CompetitiveSurveyDataTable $competitiveSurveyDataTable
     * @return Response
     */
    public function index(CompetitiveSurveyDataTable $competitiveSurveyDataTable)
    {
        return $competitiveSurveyDataTable->render('backend.competitive_surveys.index');
    }

    /**
     * Show the form for creating a new CompetitiveSurvey.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.competitive_surveys.create');
    }

    /**
     * Store a newly created CompetitiveSurvey in storage.
     *
     * @param CreateCompetitiveSurveyRequest $request
     *
     * @return Response
     */
    public function store(CreateCompetitiveSurveyRequest $request)
    {
        $input = $request->all();


        /** @var CompetitiveSurvey $competitiveSurvey */
        $competitiveSurvey = CompetitiveSurvey::create($input);

        Flash::success('Competitive Survey saved successfully.');

        return redirect(route('backend.competitiveSurveys.index'));
    }

//    public function store(Request $request)
//    {
//        $this->validate($request, [
//            'filenames' => 'required',
//            'filenames.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg'
//        ]);
//        if($request->hasfile('filenames'))
//        {
//            foreach($request->file('filenames') as $file)
//            {
//                $name = time().'.'.$file->extension();
//                $file->move(base_path() . '/storage/app/public', $name);
//                $data[] = $name;
//            }
//        }
//
//
//        $file= new CompetitiveSurvey();
//        $file->filenames=json_encode($data);
//        $file->save();
//
//
//        return back()->with('success', 'Your files has been send successfully');
//    }

    /**
     * Display the specified CompetitiveSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CompetitiveSurvey $competitiveSurvey */
        $competitiveSurvey = CompetitiveSurvey::find($id);

        if (empty($competitiveSurvey)) {
            Flash::error('Competitive Survey not found');

            return redirect(route('backend.competitiveSurveys.index'));
        }

        return view('backend.competitive_surveys.show')->with('competitiveSurvey', $competitiveSurvey);
    }

    /**
     * Show the form for editing the specified CompetitiveSurvey.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var CompetitiveSurvey $competitiveSurvey */
        $competitiveSurvey = CompetitiveSurvey::find($id);

        if (empty($competitiveSurvey)) {
            Flash::error('Competitive Survey not found');

            return redirect(route('backend.competitiveSurveys.index'));
        }

        return view('backend.competitive_surveys.edit')->with('competitiveSurvey', $competitiveSurvey);
    }

    /**
     * Update the specified CompetitiveSurvey in storage.
     *
     * @param  int              $id
     * @param UpdateCompetitiveSurveyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompetitiveSurveyRequest $request)
    {
        /** @var CompetitiveSurvey $competitiveSurvey */
        $competitiveSurvey = CompetitiveSurvey::find($id);

        if (empty($competitiveSurvey)) {
            Flash::error('Competitive Survey not found');

            return redirect(route('backend.competitiveSurveys.index'));
        }

        $competitiveSurvey->fill($request->all());
        $competitiveSurvey->save();

        Flash::success('Competitive Survey updated successfully.');

        return redirect(route('backend.competitiveSurveys.index'));
    }

    /**
     * Remove the specified CompetitiveSurvey from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CompetitiveSurvey $competitiveSurvey */
        $competitiveSurvey = CompetitiveSurvey::find($id);

        if (empty($competitiveSurvey)) {
            Flash::error('Competitive Survey not found');

            return redirect(route('backend.competitiveSurveys.index'));
        }

        $competitiveSurvey->delete();

        Flash::success('Competitive Survey deleted successfully.');

        return redirect(route('backend.competitiveSurveys.index'));
    }
}
