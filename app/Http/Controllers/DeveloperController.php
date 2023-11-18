<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

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

            return response()->json(['status' => 'success', 'message' => 'User account deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'User Not Found!']);
        }
    }
}
