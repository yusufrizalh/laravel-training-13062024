<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile/{username}', function ($username) { // * route wildcard
    return view('profile', compact('username'));
});

// Route::view('/contact', 'contact');
Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);

Route::view('/about', 'about');

Route::resource('/articles', ArticleController::class);

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/chart', [EmployeeController::class, 'chart']);

Auth::routes();

Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin')->middleware('superadmin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/manager', [ManagerController::class, 'index'])->name('manager')->middleware('manager');
Route::get('/staff', [StaffController::class, 'index'])->name('staff')->middleware('staff');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit']);
Route::put('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

Route::get('/departments/{department:name}', [DepartmentController::class, 'show']);
Route::get('/skills/{skill:name}', [SkillController::class, 'show']);
