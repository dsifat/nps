<?php

namespace App\Http\Controllers\Backend;

use Hash;
use App\Imports\UsersImport;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use App\Mail\UserCreatedAgentMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendAgentCreationEmailJob;
use Maatwebsite\Excel\HeadingRowImport;

class AgentController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $users = User::whereHas(
                'roles',
                function ($q) {
                    $q->where('role_name', 'Agent');
                }
            )->get();

            return datatables()->of($users)
                ->addColumn('action', '')
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.surveys.telephonic.agents.index');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('agent_list')) {
            $validator = \Validator::make($request->all(), [
                'agent_list' => 'required|max:5000|mimes:xls,xlsx',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }

            $file = $request->file('agent_list');
            $location = 'uploads';
            $filename = $file->getClientOriginalName();
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);

            $headings = (new HeadingRowImport())->toArray($filepath);

            foreach ($headings[0] as $heading) {
                $count = 0;
                if (in_array('name', $heading) && in_array('email', $heading)) {
                    $count++;
                }
            }
            if ($count != 1) {
                $errors = ['Please upload the excel file in sample file format'];

                return response()->json(['errors' => $errors]);
            }

            $items = \Excel::toArray(new UsersImport(), $filepath);
            foreach ($items[0] as $item) {
                $name = $item['name'];
                $email = $item['email'];
                $phone_number = $item['phone_number'];
                $remove = ['name', 'email', 'phone_number'];
                $meta_data = array_diff_key($item, array_flip($remove));
                $password = (\Str::random(10));
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'phone_number' => $phone_number,
                    'meta_data' => json_encode($meta_data),
                    'password' => Hash::make($password),
                ]);
                $user->assignRole('agent');

                //todo send mail to user
                $details['email'] = $email;
                dispatch(new SendAgentCreationEmailJob($details, $name, $password));
            }

            return response()->json(['success' => 'Data is successfully added']);
        } else {
            $validator = \Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone_no' => 'numeric',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            }

            $password = (\Str::random(10));

            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone_number' => $request['phone_no'],
                'password' => \Illuminate\Support\Facades\Hash::make($password),
            ]);

            $user->assignRole('agent');
            $email = new UserCreatedAgentMail($request['name'], $password);
            Mail::to($request['email'])->send($email);

            return response()->json(['success' => 'Data is successfully added']);
        }
    }

    public function downloadSampleFile($file_name)
    {
        $file_path = public_path('files/downloads/' . $file_name);

        return response()->download($file_path);
    }
}
