<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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
    return view('registration');
});


Route::get('/registerList',[adminController::class, 'registerList'])->name('registerList');


Route::get('/registration',[adminController::class, 'registration'])->name('registration');
Route::get('/login',[adminController::class, 'login'])->name('login');
Route::post('/login',[adminController::class, 'userLogSubmitted'])->name('login');
Route::post('/registration',[adminController::class, 'userCreateSubmitted'])->name('registration');

Route::get('/userEdit/{id}',[StudentController::class, 'userEdit'])->name('userEdit');
Route::post('/userEdit',[StudentController::class, 'userEditSubmitted'])->name('userEdit');
Route::get('/usertDelete/{id}',[StudentController::class, 'userDelete'])->name('userDelete');