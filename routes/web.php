<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\CodingStandardsController;
use App\Http\Controllers\StatusesController;
use App\Http\Controllers\PerformanceFeaturesController;
use App\Http\Controllers\SecurityFeaturesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/projects', [ProjectsController::class, 'index'])->name('project');
Route::post('/projects', [ProjectsController::class, 'store']);
Route::get('/projects/create', [ProjectsController::class, 'create']);
Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit']);
Route::put('/projects/{project}', [ProjectsController::class, 'update']);
Route::delete('/projects/{project}', [ProjectsController::class, 'destroy']);

Route::get('/codingstandards', [CodingStandardsController::class, 'index'])->name('codingstandard');
Route::post('/codingstandards', [CodingStandardsController::class, 'store']);
Route::get('/codingstandards/create', [CodingStandardsController::class, 'create']);
Route::get('/codingstandards/{codingstandard}/edit', [CodingStandardsController::class, 'edit']);
Route::put('/codingstandards/{codingstandard}', [CodingStandardsController::class, 'update']);
Route::delete('/codingstandards/{codingstandard}', [CodingStandardsController::class, 'destroy']);

Route::get('/statuses', [StatusesController::class, 'index'])->name('status');
Route::post('/statuses', [StatusesController::class, 'store']);
Route::get('/statuses/create', [StatusesController::class, 'create']);
Route::get('/statuses/{status}/edit', [StatusesController::class, 'edit']);
Route::put('/statuses/{status}', [StatusesController::class, 'update']);
Route::delete('/statuses/{status}', [StatusesController::class, 'destroy']);

Route::get('/performancefeatures', [PerformanceFeaturesController::class, 'index'])->name('performancefeature');
Route::post('/performancefeatures', [PerformanceFeaturesController::class, 'store']);
Route::get('/performancefeatures/create', [PerformanceFeaturesController::class, 'create']);
Route::get('/performancefeatures/{performancefeature}/edit', [PerformanceFeaturesController::class, 'edit']);
Route::put('/performancefeatures/{performancefeature}', [PerformanceFeaturesController::class, 'update']);
Route::delete('/performancefeatures/{performancefeature}', [PerformanceFeaturesController::class, 'destroy']);

Route::get('/securityfeatures', [SecurityFeaturesController::class, 'index'])->name('securityfeature');
Route::post('/securityfeatures', [SecurityFeaturesController::class, 'store']);
Route::get('/securityfeatures/create', [SecurityFeaturesController::class, 'create']);
Route::get('/securityfeatures/{securityfeature}/edit', [SecurityFeaturesController::class, 'edit']);
Route::put('/securityfeatures/{securityfeature}', [SecurityFeaturesController::class, 'update']);
Route::delete('/securityfeatures/{securityfeature}', [SecurityFeaturesController::class, 'destroy']);