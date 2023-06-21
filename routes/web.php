<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Request;
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

            Route::group(['prefix' => 'textEditor'], function() {
                Route::post('/uploadPhoto',  [TextEditorController::class, 'uploadPhoto'])->name('uploadPhoto');
                Route::post('/deletePhoto',  [TextEditorController::class, 'deletePhoto'])->name('deletePhoto');
            });
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
