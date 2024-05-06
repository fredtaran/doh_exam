<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;

Route::get('/', [Employee::class, 'index']);
Route::post('/save', [Employee::class, 'store'])->name('save');
Route::get('/list', [Employee::class, 'employee_list'])->name('employee_list');
