<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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


Route::post('/user/login', [ UserController::class, "login"]);






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/user_register', [WebController::class, "user_register"]);
Route::post('/AddSellerSucess', [WebController::class, "AddSellerSucess"]);

Route::post('/AddAdmSucess', [WebController::class, "AddAdmSucess"]);
Route::post('/GoalAddSucess', [WebController::class, "GoalAddSucess"]);
