<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Dictionary;
use App\Models\VisitorLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'countWords' => Dictionary::count(),
            'countContributors' => Contributor::count(),
            'visitors'=>VisitorLog::count(),
        ];

        return view('admin/dashboard', compact('data'));
    }
}
