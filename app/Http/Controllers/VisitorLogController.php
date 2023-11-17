<?php

namespace App\Http\Controllers;

use App\Models\VisitorLog;
use Illuminate\Http\Request;

class VisitorLogController extends Controller
{
    public function index(){
        return view('admin.visitor_log');
    }

    public function getDataAjax()
    {
        $data=VisitorLog::latest()->get();
        return response()->json(['data' => $data]);
    }
}
