<?php

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

Route::get('/kalukasi-bisnis', [GuestController::class, 'index']);
