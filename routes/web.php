<?php

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Guest\GuestController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/kalukasi-hr', [GuestController::class, 'hrCalculation'])->name('hr.calculation');
Route::post('/hasil-kalkulasi-form-hr', [GuestController::class, 'resultCalculationHrForm'])->name('result.calculation.hr.form');

Route::get('/kalukasi-bisnis', [GuestController::class, 'businessCalculation'])->name('business.calculation');
Route::post('/hasil-kalkulasi-form-bisnis', [GuestController::class, 'resultCalculationBusinessForm'])->name('result.calculation.business.form');

Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
Route::post('/admin/auth', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');
});
