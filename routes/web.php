<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::post('/', [LoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/custom-logout-redirect', function () {
    // Define the URL where users should be redirected after logout
    return view('custom_logout_redirect');
})->name('custom-logout-redirect');