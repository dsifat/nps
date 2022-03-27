<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\CreateSettingsRequest;
use App\Http\Requests\Backend\UpdateSettingsRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Backend\Settings;
use Illuminate\Http\Request;
use Flash;
use Response;

class SettingsController extends AppBaseController
{
    public function __construct()
    {
        $this->resource_str = 'Settings';

        $this->setCrudPermissions();
    }

    /**
     * Display a listing of the Settings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Settings $settings */
        $settings = Settings::paginate(10);

        return view('backend.settings.index')
            ->with('settings', $settings);
    }

    /**
     * Show the form for creating a new Settings.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.settings.create');
    }

    /**
     * Store a newly created Settings in storage.
     *
     * @param CreateSettingsRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        dd($request);
        /** @var Settings $settings */
        $settings = Settings::create($input);

        Flash::success('Settings saved successfully.');

        return redirect(route('backend.settings.index'));
    }

    /**
     * Display the specified Settings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('backend.settings.index'));
        }

        return view('backend.settings.show')->with('settings', $settings);
    }

    /**
     * Show the form for editing the specified Settings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('backend.settings.index'));
        }

        return view('backend.settings.edit')->with('settings', $settings);
    }

    /**
     * Update the specified Settings in storage.
     *
     * @param int $id
     * @param UpdateSettingsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsRequest $request)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('backend.settings.index'));
        }

        $settings->fill($request->all());
        $settings->save();

        Flash::success('Settings updated successfully.');

        return redirect(route('backend.settings.index'));
    }

    /**
     * Remove the specified Settings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            Flash::error('Settings not found');

            return redirect(route('backend.settings.index'));
        }

        $settings->delete();

        Flash::success('Settings deleted successfully.');

        return redirect(route('backend.settings.index'));
    }
}
