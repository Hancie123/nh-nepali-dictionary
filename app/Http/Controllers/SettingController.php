<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $notification=Notification::latest()->get();
        return view('admin.setting',compact('notification'));
    }
}
