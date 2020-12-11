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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TaskViewController::class, 'index']);

Route::get('insert', function () {
    return view('taskinsert');
});

Route::get('edit/{TaskId}', [TaskUpdateController::class, 'showSelection']);

Route::post('edit/update/{TaskId}', [TaskUpdateController::class, 'update']);

Route::post('submit', [TaskInsertController::class, 'create']);

Route::get('delete/{id}',[TaskDeleteController::class, 'delete']);

