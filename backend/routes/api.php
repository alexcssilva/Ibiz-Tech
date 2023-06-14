<?php

use App\Http\Controllers\LicitationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/licitation', [LicitationController::class, 'allLicitation']);
Route::get('/licitation/detail/{id_lic}', [LicitationController::class, 'detailIdLicitation']);
Route::post('/licitation/form', [LicitationController::class, 'createLicitation']);
Route::put('/licitation/detail/edit/{id_lic}', [LicitationController::class, 'editLicitation']);
Route::delete('/licitation/detail/{id_lic}', [LicitationController::class, 'deleteLicitation']);
