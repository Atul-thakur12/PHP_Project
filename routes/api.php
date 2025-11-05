<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('service_detail_save', [Controller::class, 'service_detail_save'])->middleware('jsvalidation');
Route::post('service_detail_update', [Controller::class, 'service_detail_update']);
Route::post('team_detail_save', [Controller::class, 'team_detail_save'])->middleware('jsvalidation');
Route::post('team_detail_update', [Controller::class, 'team_detail_update']);
