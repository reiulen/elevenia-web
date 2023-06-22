<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TextEditorController;
use App\Http\Controllers\ClientPartnerController;
use App\Http\Controllers\SejarahController;

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

// Route::get('/', function () {
//     return view('app');
// });
if(explode('/', Request::path())[0] == config('fortify.prefix')) {
    Route::group(['prefix' => config('fortify.prefix')], function () {
        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified'
        ])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');

            Route::resource('news', NewsController::class);
            Route::post('news/dataTable', [NewsController::class, 'dataTable'])->name('news.dataTable');

            Route::resource('career', CareerController::class);
            Route::post('career/dataTable', [CareerController::class, 'dataTable'])->name('career.dataTable');

            Route::group(['prefix' => 'textEditor'], function() {
                Route::post('/uploadPhoto',  [TextEditorController::class, 'uploadPhoto'])->name('uploadPhoto');
                Route::post('/deletePhoto',  [TextEditorController::class, 'deletePhoto'])->name('deletePhoto');
            });

            Route::resource('partner', ClientPartnerController::class);
            Route::resource('client', ClientPartnerController::class);
            Route::delete('/clientPartner/delete/{id}', [ClientPartnerController::class, 'destroy'])->name('clientPartner.destory');
            Route::get('/clientPartner/{id}', [ClientPartnerController::class, 'show'])->name('clientPartner.show');
            Route::post('clientPartner/dataTable/{type}', [ClientPartnerController::class, 'dataTable'])->name('clientPartner.dataTable');

            Route::resource('/sejarah', SejarahController::class);
            Route::post('sejarah/dataTable', [SejarahController::class, 'dataTable'])->name('sejarah.dataTable');
        });
    });
}else {
    Route::get('/{any}', function () {
        return view('app');
    })->where('any', '.*');
    Route::fallback(function () {
        return view('errors.404');
    });
}
