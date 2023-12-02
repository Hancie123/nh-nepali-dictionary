<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function logout(Request $request){
        $user = $request->user();
        if ($user) {
            auth()->logout();

            sweetalert()->addSuccess('Logout Successfully!');
            return redirect('/admin/login');
        } else {
            sweetalert()->addSuccess('User is not authenticated!');
            return redirect('/admin/login');
        }
    }

    public function store(LoginRequest $request)
    {
        $credential = $request->only('email', 'password');
        try {
            if (Auth::attempt($credential)) {
                $user = auth()->user();
                if ($user->status == 'admin') {
                    sweetalert()->addSuccess('Welcome '. $user->name);
                    return redirect('/admin/dashboard');

                } elseif ($user->status == 'developer') {
                    sweetalert()->addSuccess('Welcome '. $user->name);
                    return redirect('/admin/dashboard');
                }
            } else {
                sweetalert()->addWarning('Invalid Credentials');
                return back();
            }
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}