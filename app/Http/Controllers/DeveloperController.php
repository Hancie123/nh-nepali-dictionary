<?php

namespace App\Http\Controllers;

use App\Mail\DeveloperAccountMail;
use App\Models\Notification;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class DeveloperController extends Controller
{

    public function index()
    {
        $data = User::with('media')->whereIn('status',['admin','developer'])->latest()->get();
        return view('developers', compact('data'));
    }

    public function adminIndex(){
        $notification=Notification::latest()->limit(5)->get();
        return view('admin.developer_account',compact('notification'));
    }

    public function developerUserDataAjax(){
        $user=User::where('status','developer')->latest()->get();
        return response()->json(['data'=>$user]);
    }

    public function save(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users','email')]

        ]);
        try{
            $user=DB::transaction(function()use($request){
                $user=User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>'1234',
                    'status'=>'developer'

                ]
                );
                if ($request->profile_image){
                    $user->addMedia($request->profile_image)->toMediaCollection('profile_image');
                }
                $token = Str::random(60);

                DB::table('password_resets')->insert([
                    'email' => $user->email,
                    'token' => $token,
                    'created_at' => now(),
                ]);

                Mail::to($request->email)->send(new DeveloperAccountMail($user,$token));
                return $user;

            });
            if($user){
                sweetalert()->addSuccess('Verification email has been send to your email!');
                return back();
            }

        }
        catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }

    public function deleteUser($user_id) {
        $user = User::find($user_id);

        if ($user) {
            $user->delete();
            $user->clearMediaCollection('profile_image');

            return response()->json(['status' => 'success', 'message' => 'User account deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'User Not Found!']);
        }
    }

    public function setPasswordIndex(){
        return view('complete_registration');
    }


    public function setNewUserPassword(Request $request)
    {
        $request->validate([
            'password'=>['required','confirmed'],
            'password_confirmation'=>['required']

        ]);
        $token = $request->token;

        if (!$token) {
            sweetalert()->addWarning('Invalid Token!');

        }

        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset) {
            sweetalert()->addWarning('Token Not Found!');
        }

        $user = User::where('email', $passwordReset->email)->first();

        if (!$user) {
            sweetalert()->addWarning('User Not Found!');
        }

        try {
            DB::transaction(function () use ($user, $request, $token) {
                $user->password = Hash::make($request->input('password'));
                $user->email_verified_at=now();
                $user->save();
                $passwordReset = PasswordReset::where('token', $token)->delete();
            });
            sweetalert()->addSuccess('Password Set Successfully!');
            return redirect('/');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}
