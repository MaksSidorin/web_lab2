<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Swagger(
 *     schemes={"http","https"},
 *     host="",
 *     basePath="http://localhost/api/",
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Concert API",
 *     )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
