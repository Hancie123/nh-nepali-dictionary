<?php

namespace App\Http\Controllers;

use App\Models\Dictionary;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $countwords=Dictionary::count();
        return view('admin/dashboard',compact('countwords'));
    }
}
