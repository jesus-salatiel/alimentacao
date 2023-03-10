<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminRelatorio;
use App\Http\Controllers\CardController;
use App\Http\Controllers\EscolaProductController;
use App\Http\Controllers\MealsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
        Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});


// Route::get('/dashboardUsers', function () {
//     return view('dashboardUsers');
// });

// // Page Inicial - PUBLIC

// Route::resource('/', WelcomeController::class);

// Route::get('/', function(){
//     return view('welcome');
// })->name('welcome');

// Route::resource('/galeria', GaleriaController::class);

// Route::get('/info', function(){
// return view('info');
// })->name('info');

// Route::resource('/downloads', DownloadController::class);





// // SESSﾃグ ADMINISTRATIVA
Route::middleware('admin')->group(function(){

    Route::prefix('admin')->name('admin.')->group(function(){

        Route::resource('produtos', AdminProductController::class);
        Route::resource('relatorios', AdminRelatorio::class );

    });

});



// SESSÃO ESCOLAS

Route::middleware('user')->group(function(){

    Route::prefix('escolas')->name('escolas.')->group(function(){

        Route::resource('produtos', EscolaProductController::class);
        Route::resource('card', CardController::class);
        Route::resource('meals', MealsController::class);
        // Route::resource('relatorios', AdminRelatorio::class );
    });

});