<?php

namespace App\Http\Controllers\API\Backend;

use App\Http\Requests\API\Backend\CreateTopicAPIRequest;
use App\Http\Requests\API\Backend\UpdateTopicAPIRequest;
use App\Models\Backend\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\Backend\TopicResource;
use Response;

/**
 * Class TopicController
 * @package App\Http\Controllers\API\Backend
 */

class TopicAPIController extends AppBaseController
{
    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/topics",
     *      summary="Get a listing of the Topics.",
     *      tags={"Topic"},
     *      description="Get all Topics",
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
     *                  @SWG\Items(ref="#/definitions/Topic")
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
        $query = Topic::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $topics = $query->get();

        return $this->sendResponse(TopicResource::collection($topics), 'Topics retrieved successfully');
    }

    /**
     * @param CreateTopicAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/topics",
     *      summary="Store a newly created Topic in storage",
     *      tags={"Topic"},
     *      description="Store Topic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Topic that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Topic")
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
     *                  ref="#/definitions/Topic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateTopicAPIRequest $request)
    {
        $input = $request->all();

        /** @var Topic $topic */
        $topic = Topic::create($input);

        return $this->sendResponse(new TopicResource($topic), 'Topic saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/topics/{id}",
     *      summary="Display the specified Topic",
     *      tags={"Topic"},
     *      description="Get Topic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Topic",
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
     *                  ref="#/definitions/Topic"
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
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            return $this->sendError('Topic not found');
        }

        return $this->sendResponse(new TopicResource($topic), 'Topic retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateTopicAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/topics/{id}",
     *      summary="Update the specified Topic in storage",
     *      tags={"Topic"},
     *      description="Update Topic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Topic",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Topic that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Topic")
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
     *                  ref="#/definitions/Topic"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateTopicAPIRequest $request)
    {
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            return $this->sendError('Topic not found');
        }

        $topic->fill($request->all());
        $topic->save();

        return $this->sendResponse(new TopicResource($topic), 'Topic updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/topics/{id}",
     *      summary="Remove the specified Topic from storage",
     *      tags={"Topic"},
     *      description="Delete Topic",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Topic",
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
        /** @var Topic $topic */
        $topic = Topic::find($id);

        if (empty($topic)) {
            return $this->sendError('Topic not found');
        }

        $topic->delete();

        return $this->sendSuccess('Topic deleted successfully');
    }
}
