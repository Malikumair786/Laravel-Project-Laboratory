<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\homeController;
use App\http\Controllers\adminController;
use App\http\Controllers\SearchController;
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
    //     return view('welcome');
    // });
     Route::get('/', [homeController::class, 'index']);

    Route::get('/home', [homeController::class, 'redirect']);
    
    Route::post('/appointment', [homeController::class, 'appointment']);
    
    Route::get('/my_appointment', [homeController::class, 'my_appointment']);
    
    Route::get('/cancel_appoint/{id}', [homeController::class, 'cancel_appoint']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view', [adminController::class, 'add_doc_view']);

Route::get('/add_new_services', [adminController::class, 'add_new_services']);

Route::post('/upload_doctor', [adminController::class, 'upload']);

Route::post('/upload_services', [adminController::class, 'upload_services']);

Route::get('/show_appoinmtent', [adminController::class, 'show_appoinmtent']);

Route::get('/approved/{id}', [adminController::class, 'approved']);

Route::get('/cancelled/{id}', [adminController::class, 'cancelled']);

Route::get('/our_doctors', [adminController::class, 'our_doctors']);

Route::get('/deleteDoctor/{id}', [adminController::class, 'deleteDoctor']);

Route::get('/updateDoctor/{id}', [adminController::class, 'updateDoctor']);

Route::post('/edit_doctor/{id}', [adminController::class, 'edit_doctor']);



// Route::get('/search',[SearchController::class, 'search']);

