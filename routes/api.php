<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ClientPartnerController;
use App\Http\Controllers\NewsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
    Route::get('/getAll', [NewsController::class, 'getAll'])->name('getData');
    Route::get('/getDetail/{slug}', [NewsController::class, 'getDetail'])->name('getDetail');
});

Route::group(['prefix' => 'career', 'as' => 'career.'], function() {
    Route::get('/getAll', [CareerController::class, 'getAll'])->name('getData');
});

Route::group(['prefix' => 'clientPartner', 'as' => 'clientPartner.'], function() {
    Route::get('/{type}', [ClientPartnerController::class, 'getAll'])->name('getData');
});
