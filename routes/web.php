<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

// TaskController

Route::controller(TasksController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/tasks/create', 'create');
    Route::post('/tasks', 'store');
    Route::patch('/tasks/{id}', 'update');
    Route::delete('/tasks/{id}', 'delete');
    Route::delete('/tasks/delete-all', 'deleteAll');

});

