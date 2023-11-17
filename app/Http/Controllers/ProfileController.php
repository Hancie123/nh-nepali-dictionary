<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $notification=Notification::latest()->limit(5)->get();
        return view('admin.profile',compact('notification'));
    }
}
