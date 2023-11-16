<?php

use App\Http\Controllers\ContributorController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/terms-conditions', function () {
    return view('terms_conditions');
});

Route::get('/about-us', function () {
    return view('about_us');
});

Route::get('/contributors',[ContributorController::class,'publicIndex']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'store']);

Route::group(['middleware'=>'auth:web'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/setting', [SettingController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('admin/meaning/management',[DictionaryController::class,'dictionaryManagement'])->name('admin.dictionary_management');


    Route::get('admin/meaning/upload',[DictionaryController::class,'index']);
    Route::get('admin/dictionary',[DictionaryController::class,'getDictionaryData']);
    Route::post('admin/meaning/upload',[DictionaryController::class,'store']);

    Route::get('admin/contributors',[ContributorController::class,'index']);
    Route::get('admin/contributors/ajax',[ContributorController::class,'getDataAjax']);
});
