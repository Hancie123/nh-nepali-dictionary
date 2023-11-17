<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\VisitorLog;
use Illuminate\Http\Request;

class VisitorLogController extends Controller
{
    public function index(){
        $notification=Notification::latest()->get();
        return view('admin.visitor_log',compact('notification'));
    }

    public function getDataAjax()
    {
        $data=VisitorLog::latest()->get();
        return response()->json(['data' => $data]);
    }
}
