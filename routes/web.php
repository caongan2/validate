<?php

use App\Http\Controllers\UserController;
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

Route::prefix('user')->group(function (){
    Route::get('/list', [UserController::class, 'index'])->name('user.list');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.update');
    Route::post('/create', [UserController::class, 'store']);
    Route::post('/edit/{id}', [UserController::class, 'update']);
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.profile');
});

Route::group(['middleware'=>['web']], function (){

});
