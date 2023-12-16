<?php

use App\Http\Controllers\acp\AcpController;
use App\Http\Controllers\acp\SchoolController;
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

Route::get('/', [AcpController::class, 'index'])->name('acp.index');

Route::group(['prefix' => 'school', 'as' => 'school.'], function(){
    Route::get('/', [SchoolController::class, 'index'])->name('index');
    Route::get('/create', [SchoolController::class, 'create'])->name('create');
    Route::get('/edit', [SchoolController::class, 'edit'])->name('edit');
    Route::get('/delete', [SchoolController::class, 'delete'])->name('delete');
});


