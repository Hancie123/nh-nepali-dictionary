<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index($settingable_type = null, $settingable_id = null){
        $setting=SiteSetting::all();
        $notification=Notification::latest()->limit(5)->get();

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



        return view('admin.setting',compact('notification','setting','data'));
    }
}
