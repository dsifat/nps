<?php

namespace App\Http\Controllers;

use Response;
use InfyOm\Generator\Utils\ResponseUtil;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Binge ISP Portal APIs",
 *     version="1.0.0",
 *   )
 * ),
 * @SWG\SecurityScheme(
 *      securityDefinition="BaseAPIDoc",
 *      type="apiKey",
 *      in="header",
 *      name="Authorization"
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    protected $resource_str = '';

    protected function setCrudPermissions()
    {
        $this->middleware("can:Read{$this->resource_str}|Create{$this->resource_str}|Edit{$this->resource_str}|Delete{$this->resource_str}", ['only' => ['index','show']]);
        $this->middleware('can:Create' . $this->resource_str, ['only' => ['create','store']]);
        $this->middleware('can:Edit' . $this->resource_str, ['only' => ['edit','update']]);
        $this->middleware('can:Delete' . $this->resource_str, ['only' => ['destroy']]);
    }

    protected function setCrudPermissionsApi()
    {
        $this->middleware("can:Read{$this->resource_str}|Create{$this->resource_str}|Edit{$this->resource_str}|Delete{$this->resource_str}", ['only' => ['index','show']]);
        $this->middleware('can:Create' . $this->resource_str, ['only' => ['store']]);
        $this->middleware('can:Edit' . $this->resource_str, ['only' => ['update']]);
        $this->middleware('can:Delete' . $this->resource_str, ['only' => ['destroy']]);
    }

    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message)
    {
        return Response::json([
            'success' => true,
            'message' => $message,
        ], 200);
    }
}
