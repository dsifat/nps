<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateEmailGroupAPIRequest;
use App\Http\Requests\API\Backend\UpdateEmailGroupAPIRequest;
use App\Models\Backend\EmailGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\EmailGroupResource;
use Response;

/**
 * Class EmailGroupController
 * @package App\Http\Controllers\API\Backend
 */

class EmailGroupAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/emailGroups",
     *      summary="Get a listing of the EmailGroups.",
     *      tags={"EmailGroup"},
     *      description="Get all EmailGroups",
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
     *                  @SWG\Items(ref="#/definitions/EmailGroup")
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
        $query = EmailGroup::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $emailGroups = $query->get();

        return $this->sendResponse(EmailGroupResource::collection($emailGroups), 'Email Groups retrieved successfully');
    }

    /**
     * @param CreateEmailGroupAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/emailGroups",
     *      summary="Store a newly created EmailGroup in storage",
     *      tags={"EmailGroup"},
     *      description="Store EmailGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EmailGroup that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EmailGroup")
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
     *                  ref="#/definitions/EmailGroup"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateEmailGroupAPIRequest $request)
    {
        $input = $request->all();

        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::create($input);

        return $this->sendResponse(new EmailGroupResource($emailGroup), 'Email Group saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/emailGroups/{id}",
     *      summary="Display the specified EmailGroup",
     *      tags={"EmailGroup"},
     *      description="Get EmailGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EmailGroup",
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
     *                  ref="#/definitions/EmailGroup"
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
        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::find($id);

        if (empty($emailGroup)) {
            return $this->sendError('Email Group not found');
        }

        return $this->sendResponse(new EmailGroupResource($emailGroup), 'Email Group retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateEmailGroupAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/emailGroups/{id}",
     *      summary="Update the specified EmailGroup in storage",
     *      tags={"EmailGroup"},
     *      description="Update EmailGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EmailGroup",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="EmailGroup that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/EmailGroup")
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
     *                  ref="#/definitions/EmailGroup"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateEmailGroupAPIRequest $request)
    {
        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::find($id);

        if (empty($emailGroup)) {
            return $this->sendError('Email Group not found');
        }

        $emailGroup->fill($request->all());
        $emailGroup->save();

        return $this->sendResponse(new EmailGroupResource($emailGroup), 'EmailGroup updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/emailGroups/{id}",
     *      summary="Remove the specified EmailGroup from storage",
     *      tags={"EmailGroup"},
     *      description="Delete EmailGroup",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of EmailGroup",
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
        /** @var EmailGroup $emailGroup */
        $emailGroup = EmailGroup::find($id);

        if (empty($emailGroup)) {
            return $this->sendError('Email Group not found');
        }

        $emailGroup->delete();

        return $this->sendSuccess('Email Group deleted successfully');
    }
}
