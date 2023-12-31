<?php

use App\Http\Controllers\ContributorController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\DictionaryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorLogController;
use App\Models\SiteSetting;
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

Route::get('/',[DictionaryController::class,'dictionaryIndex'])->middleware('visitor');

Route::get('/terms-conditions', function ($settingable_type = null, $settingable_id = null) {
    $site_setting = SiteSetting::where("settingable_type", $settingable_type)
        ->where("settingable_id", $settingable_id)
        ->get();
    $data = [];
    foreach ($site_setting as $item) {
        if ($item->type == 'image') {
            $data[$item->key] = $item->getFirstMediaUrl();
        } else {
            $data[$item->key] = $item->value;
        }
    }
    return view('terms_conditions',compact('data'));
});

Route::get('/about-us', function ($settingable_type = null, $settingable_id = null) {
    $site_setting = SiteSetting::where("settingable_type", $settingable_type)
        ->where("settingable_id", $settingable_id)
        ->get();
    $data = [];
    foreach ($site_setting as $item) {
        if ($item->type == 'image') {
            $data[$item->key] = $item->getFirstMediaUrl();
        } else {
            $data[$item->key] = $item->value;
        }
    }
    return view('about_us',compact('data'));
});

Route::get('/contact-us', function ($settingable_type = null, $settingable_id = null) {
    $site_setting = SiteSetting::where("settingable_type", $settingable_type)
        ->where("settingable_id", $settingable_id)
        ->get();
    $data = [];
    foreach ($site_setting as $item) {
        if ($item->type == 'image') {
            $data[$item->key] = $item->getFirstMediaUrl();
        } else {
            $data[$item->key] = $item->value;
        }
    }
    return view('contact_us',compact('data'));
});

Route::get('/contributors',[ContributorController::class,'publicIndex']);
Route::get('/developers',[DeveloperController::class,'index']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'store']);

Route::get('/popular-words',[DictionaryController::class,'popularWords']);

Route::get('/complete_registration',[DeveloperController::class,'setPasswordIndex']);
Route::post('/complete_registration',[DeveloperController::class,'setNewUserPassword']);

Route::group(['middleware'=>'auth:web'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [LoginController::class, 'logout']);



    Route::get('admin/dictionary/upload',[DictionaryController::class,'index']);
    Route::get('admin/dictionary',[DictionaryController::class,'getDictionaryData']);
    Route::post('admin/dictionary/upload',[DictionaryController::class,'store']);
    Route::get('admin/dictionary/my-words',[DictionaryController::class,'myWords']);
    Route::get('admin/dictionary/my-words/ajax',[DictionaryController::class,'myWordAjax']);
    Route::get('admin/dictionary/management',[DictionaryController::class,'dictionaryManagement'])->name('admin.dictionary_management');

    Route::get('admin/contributors',[ContributorController::class,'index']);
    Route::get('admin/contributors/ajax',[ContributorController::class,'getDataAjax']);

    Route::get('admin/visitor-log',[VisitorLogController::class,'index']);
    Route::get('admin/visitor-log/ajax',[VisitorLogController::class,'getDataAjax']);
    Route::get('admin/profile',[ProfileController::class,'index']);
    Route::get('admin/notification',[NotificationController::class,'index']);

    Route::get('admin/users/developers',[DeveloperController::class,'adminIndex']);
    Route::post('admin/users/developers',[DeveloperController::class,'save']);
    Route::get('admin/users/developers/delete/{id}',[DeveloperController::class,'deleteUser']);
    Route::get('/admin/users/developers/ajax',[DeveloperController::class,'developerUserDataAjax']);

    Route::get('/admin/setting', [SettingController::class, 'index']);
    Route::post('/admin/setting',[SiteSettingController::class,'store']);



});