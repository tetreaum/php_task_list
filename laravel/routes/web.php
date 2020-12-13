<?php

use App\Http\Controllers\TaskInsertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskViewController;
use App\Http\Controllers\TaskDeleteController;
use App\Http\Controllers\TaskUpdateController;

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

//Route to home page
Route::get('/', function () {
    return view('welcome');
});

//Route to function to get data from database
Route::get('/', [TaskViewController::class, 'index']);

//Route to insert task menu
Route::get('insert', function () {
    return view('taskinsert');
});

//Route to edit task menu
Route::get('edit/{TaskId}', [TaskUpdateController::class, 'showSelection']);

//Route to edit task function
Route::post('edit/update/{TaskId}', [TaskUpdateController::class, 'update']);

//Route to submitting new task
Route::post('submit', [TaskInsertController::class, 'create']);

//Route to delete task
Route::get('delete/{id}',[TaskDeleteController::class, 'delete']);

