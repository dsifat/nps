<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CreateUserRequest;
use App\Imports\UsersImport;
use App\Jobs\SendAgentCreationEmailJob;
use App\Mail\UserCreatedAgentMail;
use App\Models\Backend\EmailList;
use App\Models\Backend\Role;
use App\Models\Backend\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpseclib3\Crypt\Hash;

class AgentController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(User::select('*'))
                ->addColumn('action', 'company-action')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
//        return view('companies');
        return view('backend.surveys.telephonic.agents.index');
    }

    public function store(Request $request)
    {
        dd($request->all());

//        $input = $request->all();
//        $input['password'] = \Hash::make($request['password']);
//        /** @var User $user */
//        $user = User::create($input);

//        dd($request->file('agent_list'));
        $file = $request->file('agent_list');
        $location = 'uploads';
        $filename = $file->getClientOriginalName();
        $file->move($location, $filename);
        $filepath = public_path($location . "/" . $filename);
//        $usersdata = \Excel::import(new UsersImport(), $filepath);

        $items = \Excel::toArray(new UsersImport(), $filepath);
        foreach ($items[0] as $user) {
            $password= (\Str::random(8));
            //todo create user
            User::create([
                'name' => $user[0],
                'email' => $user[1],
                'password' => \Illuminate\Support\Facades\Hash::make($password),
            ]);

            //todo send mail to user
            $details['email'] = $user[1];
            dispatch(new SendAgentCreationEmailJob($details, $user[0],  $password));
            dd('done');
        }
//        dd($users);
        $this->sendEmail();
//        dd('here');
//        if ($request->hasFile('agent_list')) {
//            $file = $request->file('agent_list');
//            $location = 'uploads';
//            $filename = $file->getClientOriginalName();
//            $file->move($location, $filename);
//            $filepath = public_path($location . "/" . $filename);
//
//            $excelItemCollections = \Excel::toArray(new stdClass(), $filepath);
//            $excelItemCollections = $excelItemCollections[0];
//            $emailIndex = 0;
//            foreach($excelItemCollections[0] as $col) {
//                if( strtolower($col) == 'email') {
//                    break;
//                }
//                $emailIndex++;
//            }
//            if(count($excelItemCollections[0]) <= $emailIndex) {
//                //validation_error
//                throw new \Exception("Please upload exel required email column");
//            }
//
//            $validEmails = [];
//
//            foreach ($excelItemCollections as $excelItems) {
//                $validEmails[] = $excelItems[$emailIndex];
//            }
//            $validEmails = array_slice($validEmails, 1);
//            foreach ( $validEmails as $validEmail) {
//                EmailList::updateOrCreate([
//                    'name' => $validEmail,
////                    'email_group_id' => $emailGroup->id
//                ], []);
//            }
//        }

        \Flash::success('User saved successfully.');
//        return Response()->json($user);
    }

    public function sendEmail($ids)
    {

        $details = [
            'title' => 'Mail from Admin',
            'body' => 'This is test'
        ];
        $users = User::whereIn("id", $ids)->get();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new UserCreatedAgentMail($details));
        }
        dd("Email is Sent.");
    }
}

