<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\EmailGroupDataTable;
use App\DataTables\Backend\EmailListDataTable;
use App\Http\Requests\Backend;
use App\Http\Requests\Backend\CreateEmailGroupRequest;
use App\Http\Requests\Backend\UpdateEmailGroupRequest;
use App\Models\Backend\EmailGroup;
use App\Models\Backend\EmailList;
use Flash;
use App\Http\Controllers\AppBaseController;
use DB;
use Excel;
use Illuminate\Http\Request;
use Response;
use stdClass;

class EmailGroupController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'EmailGroup';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the EmailGroup.
     *
     * @param EmailGroupDataTable $emailGroupDataTable
     * @return Response
     */
    public function index(EmailGroupDataTable $emailGroupDataTable)
    {
        return $emailGroupDataTable->render('backend.email_groups.index');
    }

    /**
     * Show the form for creating a new EmailGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.email_groups.create');
    }

    /**
     * Store a newly created EmailGroup in storage.
     *
     * @param CreateEmailGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateEmailGroupRequest $request)
    {
        $name = strtolower($request['name']);
        $file = $request->file('excel_file');

        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::where('name', $name)->first();
        if(!is_null($emailGroup)){
            Flash::error('Email Group already exists');
            return redirect(route('backend.emailGroups.index'));
        }
        $emailGroup = EmailGroup::create([
            'name' => $name
        ]);
        $this->save($emailGroup, $file);
        Flash::success('Email Group saved successfully.');

        return redirect(route('backend.emailGroups.index'));
    }
    /**
     * Display the specified EmailGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show(EmailListDataTable $emailListDataTable, $id, Request $request)
    {
//        $emailList =  EmailGroup::find($id)->emailLists();

        /** @var EmailGroup $emailGroup */
        $emailListDataTable->query(app()->make(EmailList::class),$request);
//        if (empty($emailGroup)) {
//            Flash::error('Email Group not found');
//
//            return redirect(route('backend.emailGroups.index'));
//        }
        return $emailListDataTable->render('backend.email_groups.show');
    }

    /**
     * Show the form for editing the specified EmailGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::find($id);

        if (empty($emailGroup)) {
            Flash::error('Email Group not found');

            return redirect(route('backend.emailGroups.index'));
        }

        return view('backend.email_groups.edit')->with('emailGroup', $emailGroup);
    }

    /**
     * Update the specified EmailGroup in storage.
     *
     * @param  int              $id
     * @param UpdateEmailGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmailGroupRequest $request)
    {
        $emailGroup = EmailGroup::find($id);
        if (empty($emailGroup)) {
            Flash::error('Email Group not found');
            return redirect(route('backend.emailGroups.index'));
        }

        $name = strtolower($request['name']);
        $file = $request->file('excel_file');
        if($emailGroup->name != $name){

            $newGroup = EmailGroup::where('name', $name)->first();
            if(!is_null($newGroup)){
                Flash::error('Email Group already exists');
                return redirect(route('backend.emailGroups.index'));
            }

            $emailGroup->name = $name;
            $emailGroup->save();
        }
        $this->save($emailGroup, $file);
        Flash::success('Email Group updated successfully.');
        return redirect(route('backend.emailGroups.index'));
    }

    /**
     * Remove the specified EmailGroup from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::find($id);

        if (empty($emailGroup)) {
            Flash::error('Email Group not found');

            return redirect(route('backend.emailGroups.index'));
        }

        $emailGroup->delete();

        Flash::success('Email Group deleted successfully.');

        return redirect(route('backend.emailGroups.index'));
    }

    private function save($emailGroup, $file)
    {
        if($file) {
            $location = 'uploads';
            $filename = $file->getClientOriginalName();
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);

            $excelItemCollections = Excel::toArray(new stdClass(), $filepath);
            $excelItemCollections = $excelItemCollections[0];
            $emailIndex = 0;
            foreach($excelItemCollections[0] as $col) {
                if( strtolower($col) == 'email') {
                    break;
                }
                $emailIndex++;
            }
            if(count($excelItemCollections[0]) <= $emailIndex) {
                //validation_error
                throw new \Exception("Please upload exel required email column");
            }

            $validEmails = [];

            foreach ($excelItemCollections as $excelItems) {
                $validEmails[] = $excelItems[$emailIndex];
            }
            $validEmails = array_slice($validEmails, 1);
            foreach ( $validEmails as $validEmail) {
                EmailList::updateOrCreate([
                    'name' => $validEmail,
                    'email_group_id' => $emailGroup->id
                ], []);
            }
        }

    }
}
