<?php

namespace App\Http\Controllers;

use App\DataTables\DictionariesDataTable;
use App\DataTables\DictionaryDataTable;
use App\Http\Requests\Dictionary\CreateDictionaryRequest;
use App\Models\Dictionary;
use App\Models\Notification;
use App\Models\UserAddedMeaning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DictionaryController extends Controller
{

    public function index(){
        $notification=Notification::latest()->get();
        return view('admin.dictionary-upload-meanings',compact('notification'));
    }

    public function dictionaryManagement(){
        $notification=Notification::latest()->get();
        return view('admin.dictionary_management',compact('notification'));
    }

    public function getDictionaryData(){
        $dictionary=Dictionary::latest()->get();
        return response()->json(['data'=>$dictionary]);
    }

    public function store(CreateDictionaryRequest $request){

        try{
            $dictionary=DB::transaction(function()use($request){
                $dictionary=Dictionary::create([
                    'Words'=>$request->word,
                    'Meaning'=>$request->english_meaning,
                    'nepali_meaning'=>$request->nepali_meaning
                ]);

                UserAddedMeaning::create([
                    'word_id'=>$dictionary->id,
                    'user_id'=>auth()->user()->id,

                ]);
                return $dictionary;

            });
            if($dictionary){
                sweetalert()->addSuccess('Word is added successfully to dictionary database');
                return back();
            }

        }
        catch(\Exception $e){
            return back()->with('error', $e->getMessage());

        }

    }
}
