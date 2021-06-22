<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::post('/banco', [TestController::class, "banco"]);

// Register User
Route::get('/Home', [WebController::class, "HomeMS"]);
Route::post('/user_register', [WebController::class, "user_register"]);
// Register Goals
Route::get('/GoalR', [WebController::class, "GoalR"]);
Route::post('/goal_register', [WebController::class, "goal_register"]);






//Init
Route::get('/Init', [WebController::class, "Init"]);
//Start App
Route::get('/Start', [WebController::class, "Start"]);
Route::post('/Start', [LoginController::class, "authenticate"]);
//Options
Route::get('/Options', [WebController::class, "Options"]);
//Seller Goal Screen
Route::get('/SellerGoalScreen', [WebController::class, "SellerGoalScreen"]);
//Goal
Route::get('/GoalScreen', [WebController::class, "GoalScreen"]);
//Create Goal Screen
Route::get('/CreateGoalScreen', [WebController::class, "CreateGoalScreen"]);
//Create Seller Screen
Route::get('/SellerCreate', [WebController::class, "SellerCreate"]);

//Delete Seller Function
Route::get('/SellerDelete/{id}', [WebController::class, "Delete1"]);
//Create Seller Screen
Route::get('/SellerAdd', [WebController::class, "SellerAdd"]);
//Create Adm Screen
Route::get('/AdmAdd', [WebController::class, "AdmAdd"]);
//Screen Adm View
Route::get('/AdmCreate', [WebController::class, "AdmCreate"]);
//Edit Adm Screen
Route::get('/AdmEditScreen/{id}', [WebController::class, "AdmEditScreen"]);
Route::post('/AdmEdit/{id}', [WebController::class, "Update"]);
//Delete Adm Function
Route::get('/AdmDelete/{id}', [WebController::class, "Delete"]);
//Seller Created Sucefull
Route::post('/AddSellerSucess', [WebController::class, "AddSellerSucess"]);
//Adm Created Sucefull
Route::post('/AddAdmSucess', [WebController::class, "AddAdmSucess"]);
//Goal Created Sucefull
Route::post('/GoalAddSucess', [WebController::class, "GoalAddSucess"]);
//Statistics
Route::post('/Archieved', [WebController::class, "Colect"])->middleware('auth');
Route::get('/InitSeller', [WebController::class, "InitSeller"]);

Route::get('/GoalDelete/{id}', [WebController::class, "deletegoal"]);
//Edit Seller Screen
Route::get('/SellerEditScreen/{id}', [WebController::class, "SellerEditScreen"]);
Route::post('/SellerEdit/{id}', [WebController::class, "Update1"]);
//Edit Goal Screen
Route::get('/GoalEditScreen/{id}', [WebController::class, "GoalEditScreen"]);
Route::post('/GoalEdit/{id}', [WebController::class, "updategoal"]);
