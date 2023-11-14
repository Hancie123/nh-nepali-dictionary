<?php

namespace App\Http\Controllers;

use App\DataTables\DictionariesDataTable;
use App\DataTables\DictionaryDataTable;
use App\Http\Requests\Dictionary\CreateDictionaryRequest;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{

    public function index(){
        return view('admin.dictionary-upload-meanings');
    }

    public function dictionaryManagement(DictionaryDataTable $dataTable){
        return $dataTable->render('admin.dictionary_management');
    }

    public function store(CreateDictionaryRequest $request){

    }
}
