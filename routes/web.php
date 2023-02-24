<?php

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
