<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Dictionary;
use App\Models\VisitorLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'countWords' => Dictionary::count(),
            'countContributors' => Contributor::count(),
            'visitors' => VisitorLog::count(),

            'popularDevices' => VisitorLog::select(
                'device_type',
                'device_browser',
                'device_os',
                DB::raw('COUNT(*) as device_count')
            )
                ->groupBy('device_type', 'device_browser', 'device_os')
                ->orderByDesc('device_count')
                ->get(),
        ];

        return view('admin/dashboard', compact('data'));
    }
}
