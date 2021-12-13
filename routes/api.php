<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Artist;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('artist')->group(function () {
    Route::get('/', [ArtistController::class, 'index']);
    Route::get('/{id}', [ArtistController::class, 'show']); });
                               
Route::prefix('profile')->group(function () {
Route::get('/', [UserController::class, 'show']); });
                               
Route::post('auth', [UserController::class, 'auth']);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
