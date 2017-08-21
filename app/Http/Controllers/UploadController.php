<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.upload');
    }

    public function store(request $request)
    {
        if($request->hasFile('file')) {

            $request->file('file');
            return Storage::putFile('public',$request->file('file'));

        }else{

            return "No file selected";
        }
    }
}
