<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
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

        return view('admin.contributors');
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
