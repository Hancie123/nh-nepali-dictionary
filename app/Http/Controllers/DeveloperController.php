<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{

    public function index()
    {
        $data = User::with('media')->whereIn('status',['admin','developer'])->latest()->get();
        return view('developers', compact('data'));
    }
}
