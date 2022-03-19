<?php

namespace App\Http\Controllers\API\Backend;

use Response;
use Illuminate\Http\Request;
use App\Models\Backend\Phone;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\PhoneResource;
use App\Http\Requests\API\Backend\CreatePhoneAPIRequest;
use App\Http\Requests\API\Backend\UpdatePhoneAPIRequest;

/**
 * Class PhoneController
 * @package App\Http\Controllers\API\Backend
 */

class PhoneAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/phones",
     *      summary="Get a listing of the Phones.",
     *      tags={"Phone"},
     *      description="Get all Phones",
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
     *                  @SWG\Items(ref="#/definitions/Phone")
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
        $query = Phone::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $phones = $query->get();

        return $this->sendResponse(PhoneResource::collection($phones), 'Phones retrieved successfully');
    }

    /**
     * @param CreatePhoneAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/phones",
     *      summary="Store a newly created Phone in storage",
     *      tags={"Phone"},
     *      description="Store Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Phone that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Phone")
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
     *                  ref="#/definitions/Phone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePhoneAPIRequest $request)
    {
        $input = $request->all();

        /** @var Phone $phone */
        $phone = Phone::create($input);

        return $this->sendResponse(new PhoneResource($phone), 'Phone saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/phones/{id}",
     *      summary="Display the specified Phone",
     *      tags={"Phone"},
     *      description="Get Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
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
     *                  ref="#/definitions/Phone"
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
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        return $this->sendResponse(new PhoneResource($phone), 'Phone retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePhoneAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/phones/{id}",
     *      summary="Update the specified Phone in storage",
     *      tags={"Phone"},
     *      description="Update Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Phone that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Phone")
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
     *                  ref="#/definitions/Phone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePhoneAPIRequest $request)
    {
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        $phone->fill($request->all());
        $phone->save();

        return $this->sendResponse(new PhoneResource($phone), 'Phone updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/phones/{id}",
     *      summary="Remove the specified Phone from storage",
     *      tags={"Phone"},
     *      description="Delete Phone",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Phone",
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
        /** @var Phone $phone */
        $phone = Phone::find($id);

        if (empty($phone)) {
            return $this->sendError('Phone not found');
        }

        $phone->delete();

        return $this->sendSuccess('Phone deleted successfully');
    }
}
