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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use phpseclib3\Crypt\Hash;

class AgentController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(User::select('*'))
                ->addColumn('action', '')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
//        return view('companies');
        return view('backend.surveys.telephonic.agents.index');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        if ($request->hasFile('file')) {
//            dd($request->all());
            $file = $request->file('file');
            $location = 'uploads';
            $filename = $file->getClientOriginalName();
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);

            $items = \Excel::toArray(new UsersImport(), $filepath);
//            dd($items);
//            foreach($items[0] as $item){
////                dd($item);
//                $name = $item['name'];
//                $email = 'asd@gmaol.com';
//                $phone_number = '01832423323';
//                $meta_data = array_shift($item);
////                dd($meta_data);
//                $password = (\Str::random(8));
//
//                User::create([
//                    'name' => $name,
//                    'email' => $email,
//                    'phone_number' => $phone_number,
//                    'meta_data' => $meta_data,
//                    'password' => \Illuminate\Support\Facades\Hash::make($password),
//                ]);
////                dd('done');
//            }
            foreach ($items[0] as $user) {
//                dd($user);
                $password = (\Str::random(8));
                //todo create user
                User::create([
                    'name' => $user[0],
                    'email' => $user[1],
                    'phone_number' => $user[2],
                    'meta_data' => json_encode($user[3]),
                    'password' => \Illuminate\Support\Facades\Hash::make($password),
                ]);
                //todo send mail to user
                $details['email'] = $user[1];
                dispatch(new SendAgentCreationEmailJob($details, $user[0], $password));
            }
//            dd('done');
        } else {
            $validator = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone_no' => 'required',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }
            $password = (\Str::random(8));
            User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => $request['phone_no'],
                'password' => \Illuminate\Support\Facades\Hash::make($password),
            ]);
            $email = new UserCreatedAgentMail($request['name'], $password);
            Mail::to($request['email'])->send($email);
//            \Flash::success('User saved successfully.');
//            return Response()->json($user);
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully'
                ]
            );
        }

//        $input = $request->all();
//        $input['password'] = \Hash::make($request['password']);
//        /** @var User $user */
//        $user = User::create($input);

//        dd($request->file('agent_list'));
//        $file = $request->file('file');
//        $location = 'uploads';
//        $filename = $file->getClientOriginalName();
//        $file->move($location, $filename);
//        $filepath = public_path($location . "/" . $filename);
////        $usersdata = \Excel::import(new UsersImport(), $filepath);
//
//        $items = \Excel::toArray(new UsersImport(), $filepath);
//        dd($items);
//        foreach ($items[0] as $user) {
//            $password = (\Str::random(8));
//            //todo create user
//            User::create([
//                'name' => $user[0],
//                'email' => $user[1],
//                'password' => \Illuminate\Support\Facades\Hash::make($password),
//            ]);
//
//            //todo send mail to user
//            $details['email'] = $user[1];
//            dispatch(new SendAgentCreationEmailJob($details, $user[0], $password));
//            dd('done');
//        }
//        dd($users);
//        $this->sendEmail();
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

    }

    public function downloadSampleFile($file_name)
    {
        $file_path = public_path('files/downloads/' . $file_name);
        return response()->download($file_path);
    }
}

