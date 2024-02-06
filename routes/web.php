<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ComboPlanController;
use App\Http\Controllers\EligibilityCriteriaController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [PlanController::class, 'index'])->name('plans');
Route::GET('/create-plan', [PlanController::class, 'create'])->name('plan.create');
Route::POST('/plan-store', [PlanController::class, 'store'])->name('plan.store');
Route::GET('/plan/view/{id}', [PlanController::class, 'view'])->name('plan.view');
Route::GET('/plan/{id}/edit', [PlanController::class, 'edit'])->name('plan.edit');
Route::PUT('/plan/{id}', [PlanController::class, 'update'])->name('plan.update');
Route::delete('/plan/delete/{id}', [PlanController::class, 'destroy'])->name('plan.delete');

Route::get('/combo-plans', [ComboPlanController::class, 'index'])->name('combo-plans');
Route::GET('/add-combo-plan', [ComboPlanController::class, 'create'])->name('combo-plan.create');
Route::POST('/combo-plan-store', [ComboPlanController::class, 'store'])->name('combo-plan.store');
Route::GET('/combo-plan/view/{id}', [ComboPlanController::class, 'view'])->name('combo-plan.view');
Route::GET('/combo-plan/{id}/edit', [ComboPlanController::class, 'edit'])->name('combo-plan.edit');
Route::PUT('/combo-plan/{id}', [ComboPlanController::class, 'update'])->name('combo-plan.update');
Route::delete('/combo-plan/delete/{id}', [ComboPlanController::class, 'destroy'])->name('combo-plan.delete');

Route::get('/eligibility-criteria', [EligibilityCriteriaController::class, 'index'])->name('eligibility-criteria');
Route::GET('/create-eligibility-criteria', [EligibilityCriteriaController::class, 'create'])->name('eligibility-criteria.create');
Route::POST('/eligibility-criteria-store', [EligibilityCriteriaController::class, 'store'])->name('eligibility-criteria.store');
Route::GET('/eligibility-criteria/view/{id}', [EligibilityCriteriaController::class, 'view'])->name('eligibility-criteria.view');
Route::GET('/eligibility-criteria/{id}/edit', [EligibilityCriteriaController::class, 'edit'])->name('eligibility-criteria.edit');
Route::PUT('/eligibility-criteria/{id}', [EligibilityCriteriaController::class, 'update'])->name('eligibility-criteria.update');
Route::delete('/eligibility-criteria/delete/{id}', [EligibilityCriteriaController::class, 'destroy'])->name('eligibility-criteria.delete');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
