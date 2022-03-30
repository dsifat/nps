<?php

namespace App\Http\Controllers\API\Backend;

use Response;
use Illuminate\Http\Request;
use App\Models\Backend\Settings;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\SettingsResource;
use App\Http\Requests\API\Backend\CreateSettingsAPIRequest;
use App\Http\Requests\API\Backend\UpdateSettingsAPIRequest;

/**
 * Class SettingsController
 * @package App\Http\Controllers\API\Backend
 */

class SettingsAPIController extends AppBaseController
{
    /**
     * Display a listing of the Settings.
     * GET|HEAD /settings
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Settings::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $settings = $query->get();

        return $this->sendResponse(SettingsResource::collection($settings), 'Settings retrieved successfully');
    }

    /**
     * Store a newly created Settings in storage.
     * POST /settings
     *
     * @param CreateSettingsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Settings $settings */
        $settings = Settings::create($input);

        return $this->sendResponse(new SettingsResource($settings), 'Settings saved successfully');
    }

    /**
     * Display the specified Settings.
     * GET|HEAD /settings/{id}
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
            return $this->sendError('Settings not found');
        }

        return $this->sendResponse(new SettingsResource($settings), 'Settings retrieved successfully');
    }

    /**
     * Update the specified Settings in storage.
     * PUT/PATCH /settings/{id}
     *
     * @param int $id
     * @param UpdateSettingsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingsAPIRequest $request)
    {
        /** @var Settings $settings */
        $settings = Settings::find($id);

        if (empty($settings)) {
            return $this->sendError('Settings not found');
        }

        $settings->fill($request->all());
        $settings->save();

        return $this->sendResponse(new SettingsResource($settings), 'Settings updated successfully');
    }

    /**
     * Remove the specified Settings from storage.
     * DELETE /settings/{id}
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
            return $this->sendError('Settings not found');
        }

        $settings->delete();

        return $this->sendSuccess('Settings deleted successfully');
    }
}
