<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);

Route::put('tasks/{task}/todo-complete', [TaskController::class, 'todoComplete'])->name('tasks.todo-complete');

Route::fallback(function () {
    return 'Still got somewhere!';
});