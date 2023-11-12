<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dictionary\CreateDictionaryRequest;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index(){
        return view('admin.dictionary-upload-meanings');
    }

    public function dictionaryManagement(){
        return view('admin.dictionary_management');
    }

    public function store(CreateDictionaryRequest $request){

    }
}
