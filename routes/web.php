<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/submit-form', [FormController::class, 'store'])->name('submit.form');
Route::post('/submit-main-form', [FormController::class, 'storeMain'])->name('submit.main.form');


Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::post('/login', [AuthController::class, 'loginF'])->name('loginF');
Route::post('/admin/delete-form-data/{id}', [AdminController::class, 'deleteFormData'])->name('admin.deleteFormData');
Route::post('/admin/delete-main-form-data/{id}', [AdminController::class, 'deleteMainFormData'])->name('admin.deleteMainFormData');
Route::get('/editFormData/{id}',[AdminController::class, 'editFormData'])->name('admin.editFormData');
Route::put('/updateFormData/{id}',[AdminController::class, 'updateFormData'])->name('admin.updateFormData');
Route::get('/editMainFormData/{id}', [AdminController::class, 'editMainFormData'])->name('admin.editMainFormData');
Route::put('/updateMainFormData/{id}', [AdminController::class, 'updateMainFormData'])->name('admin.updateMainFormData');