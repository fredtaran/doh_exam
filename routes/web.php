<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;

Route::get('/', [Employee::class, 'index'])->name('add_employee');
Route::post('/save', [Employee::class, 'store'])->name('save');
Route::get('/list', [Employee::class, 'employee_list'])->name('employee_list');
Route::get('/edit/{id}', [Employee::class, 'edit_employee'])->name('employee_edit');
Route::post('/save_edit/{id}', [Employee::class, 'save_edit'])->name('save_edit');
