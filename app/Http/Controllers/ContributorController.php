<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Notification;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function publicIndex($settingable_type = null, $settingable_id = null)
    {
        $user = User::with('media')->join('contributors', 'contributors.user_id', '=', 'users.id')->select(
            'users.name',
            'users.email',
            'users.id'
        )->get();

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


        return view('contributors', compact('user','data'));
    }
    public function index()
    {
        $notification=Notification::latest()->limit(5)->get();
        return view('admin.contributors',compact('notification'));
    }

    public function getDataAjax()
    {
        $data = User::with('media')->join('contributors', 'contributors.user_id', '=', 'users.id')->select(
            'users.name',
            'users.email',
            'users.id'
        )->get();
        return response()->json(['data' => $data]);
    }
}