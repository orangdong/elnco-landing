<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('service', [LandingController::class, 'service'])->name('service');
Route::get('service/add-on', [LandingController::class, 'service_addon'])->name('service.add-on');
Route::get('service/package', [LandingController::class, 'service_package'])->name('service.package');

Route::get('integration', [LandingController::class, 'integration'])->name('integration');
Route::get('case-study', [LandingController::class, 'case_study'])->name('case_study');

Route::get('corporate', [LandingController::class, 'corporate'])->name('corporate');
Route::get('corporate/csr', [LandingController::class, 'corporate_csr'])->name('corporate.csr');
Route::get('about', [LandingController::class, 'about'])->name('about');
