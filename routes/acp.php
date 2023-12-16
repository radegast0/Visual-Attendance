<?php

use App\Http\Controllers\acp\AcpController;
use App\Http\Controllers\acp\LectureController;
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

Route::group(['prefix' => 'lecture', 'as' => 'lecture.'], function(){
    Route::get('/', [LectureController::class, 'index'])->name('index');
    Route::get('/create', [LectureController::class, 'create'])->name('create');
    Route::get('/edit', [LectureController::class, 'edit'])->name('edit');
    Route::get('/delete', [LectureController::class, 'delete'])->name('delete');

    Route::group(['prefix' => '{lecture:id}/plan'], function(){
        Route::get('/', [LectureController::class, 'planIndex'])->name('plan.index');
        Route::get('/form/{plan:id?}', [LectureController::class, 'planForm'])->name('plan.form');
        Route::post('/save/{plan:id?}', [LectureController::class, 'planSave'])->name('plan.save');
    });
});


