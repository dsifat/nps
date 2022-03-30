<?php

namespace App\Http\Controllers\Backend;

use Flash;
use Response;
use App\Models\Backend\Team;
use App\Models\Backend\User;
use Illuminate\Http\Request;
use App\Imports\TeamMembersListImport;
use Illuminate\Support\Facades\Redirect;
use App\DataTables\Backend\TeamDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Backend\CreateTeamRequest;
use App\Http\Requests\Backend\UpdateTeamRequest;
use App\DataTables\Backend\TeamMembersListDataTable;

class TeamController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Team';
        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Team.
     *
     * @param TeamDataTable $teamDataTable
     * @return Response
     */
    public function index(TeamDataTable $teamDataTable)
    {
        return $teamDataTable->render('backend.teams.index');
    }

    /**
     * Show the form for creating a new Team.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.teams.create');
    }

    public function createBulkTeam()
    {
        return view('backend.teams.create_bulk');
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param CreateTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamRequest $request)
    {
        if ($request->hasFile('team_members_list')) {
            $file = $request->file('team_members_list');
            $location = 'uploads';
            $filename = $file->getClientOriginalName();
            $file->move($location, $filename);
            $filepath = public_path($location . "/" . $filename);

            $items = \Excel::toArray(new TeamMembersListImport(), $filepath);

            $team = new Team();
            $team->name = $request->name;
            $team->save();

            $ids = [];
            foreach ($items[0] as $item) {
                $user = User::where('email', '=', $item['email'])->first();
                if ($user === null) {
                    return Redirect::back()->withErrors(['user' => 'Email Doesn\'t Exist in Users'])
                        ->withInput();
                } else {
                    $ids[] = $user->id;
                }
            }
            $team->addMembers(User::find($ids));
        } else {
            $input = $request->except('user_ids');

            /** @var Team $team */
            $team = Team::create($input);

            $ids = $request->user_ids ?? [];
            $team->addMembers(User::find($ids));
        }

        Flash::success('Team saved successfully.');

        return redirect(route('backend.teams.index'));
    }

    /**
     * Display the specified Team.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show(TeamMembersListDataTable $teamMembersListDataTable, $id, Request $request)
    {
        $team = Team::find($id);

        $teamMembersListDataTable->query(app()->make(User::class), $request);

        return $teamMembersListDataTable->render('backend.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified Team.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Team $team */
        $team = Team::find($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }

        return view('backend.teams.edit')->with('team', $team);
    }

    /**
     * Update the specified Team in storage.
     *
     * @param int $id
     * @param UpdateTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamRequest $request)
    {
        /** @var Team $team */
        $team = Team::find($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }

        $team->fill($request->all());
        $team->save();

        $ids = $request->user_ids ?? [];
        $team->addMembers(User::find($ids));

        Flash::success('Team updated successfully.');

        return redirect(route('backend.teams.index'));
    }

    /**
     * Remove the specified Team from storage.
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Team $team */
        $team = Team::find($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('backend.teams.index'));
        }
        $team->delete();

        Flash::success('Team deleted successfully.');

        return redirect(route('backend.teams.index'));
    }
}
