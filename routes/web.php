<?php

use App\Http\Controllers\playersController;
use App\Http\Controllers\teamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('/home',function(){return view('welcome');});

Route::get('/teams',[teamsController::class,'list']);

Route::get('/teams/{team}',[teamsController::class,'find']);

Route::get('/teams/form/{team}',[teamsController::class,'formforteam']);

// Route::post('/teams/update/{$team->id}',[teamsController::class,'update']);

Route::post('/teams/{team}',[teamsController::class,'update']);

Route::get('/teamsadd',[teamsController::class,'addteam']);

Route::post('/teamsadd/new',[teamsController::class,'store']);

// Route::get('/playersfire/{player}',[teamsController::class,'formforfire']);
Route::get('/playersfire/{player}/{team}',[teamsController::class,'formforfire']);

Route::post('/fire/{player}',[teamsController::class,'fireplayer']);

Route::get('/players',[playersController::class,'list']);
