<?php

use App\Http\Controllers\TaskInsertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskViewController;

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

Route::post('submit', [TaskinsertController::class, 'create']);



