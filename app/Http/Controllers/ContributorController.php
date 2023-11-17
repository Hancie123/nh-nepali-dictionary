<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function publicIndex()
    {
        $data = User::with('media')->join('contributors', 'contributors.user_id', '=', 'users.id')->select(
            'users.name',
            'users.email',
            'users.id'
        )->get();
        return view('contributors', compact('data'));
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
