<?php

namespace App\Http\Controllers\API\Backend;

use Response;
use Illuminate\Http\Request;
use App\Models\Backend\PhoneGroup;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\PhoneGroupResource;
use App\Http\Requests\API\Backend\CreatePhoneGroupAPIRequest;
use App\Http\Requests\API\Backend\UpdatePhoneGroupAPIRequest;

/**
 * Class PhoneGroupController
 * @package App\Http\Controllers\API\Backend
 */

class PhoneGroupAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/phoneGroups",
     *      summary="Get a listing of the PhoneGroups.",
     *      tags={"PhoneGroup"},
     *      description="Get all PhoneGroups",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/PhoneGroup")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $query = PhoneGroup::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $phoneGroups = $query->get();

        return $this->sendResponse(PhoneGroupResource::collection($phoneGroups), 'Phone Groups retrieved successfully');
    }

    /**
     * @param CreatePhoneGroupAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/phoneGroups",
     *      summary="Store a newly created PhoneGroup in storage",
     *      tags={"PhoneGroup"},
     *      description="Store PhoneGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="PhoneGroup that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/PhoneGroup")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/PhoneGroup"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePhoneGroupAPIRequest $request)
    {
        $input = $request->all();

        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::create($input);

        return $this->sendResponse(new PhoneGroupResource($phoneGroup), 'Phone Group saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/phoneGroups/{id}",
     *      summary="Display the specified PhoneGroup",
     *      tags={"PhoneGroup"},
     *      description="Get PhoneGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of PhoneGroup",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/PhoneGroup"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            return $this->sendError('Phone Group not found');
        }

        return $this->sendResponse(new PhoneGroupResource($phoneGroup), 'Phone Group retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePhoneGroupAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/phoneGroups/{id}",
     *      summary="Update the specified PhoneGroup in storage",
     *      tags={"PhoneGroup"},
     *      description="Update PhoneGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of PhoneGroup",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="PhoneGroup that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/PhoneGroup")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/PhoneGroup"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePhoneGroupAPIRequest $request)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            return $this->sendError('Phone Group not found');
        }

        $phoneGroup->fill($request->all());
        $phoneGroup->save();

        return $this->sendResponse(new PhoneGroupResource($phoneGroup), 'PhoneGroup updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/phoneGroups/{id}",
     *      summary="Remove the specified PhoneGroup from storage",
     *      tags={"PhoneGroup"},
     *      description="Delete PhoneGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of PhoneGroup",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var PhoneGroup $phoneGroup */
        $phoneGroup = PhoneGroup::find($id);

        if (empty($phoneGroup)) {
            return $this->sendError('Phone Group not found');
        }

        $phoneGroup->delete();

        return $this->sendSuccess('Phone Group deleted successfully');
    }
}
