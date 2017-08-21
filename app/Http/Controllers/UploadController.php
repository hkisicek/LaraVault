<?php

namespace App\Http\Controllers;

use App\Asset;

use Faker\Provider\File;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.upload');
    }

    public function store(Request $request)
    {
        if($request->hasFile('file')) {

            $request->file('file');

            $type=$request->file('file')->extension();
            $bytes=$request->file('file')->getClientSize();
            $reference=$request->file('file')->path();
            $downloaded=0;
            $user=Auth::user()->id;


            $input=array('type'=>$type,
                         'size'=>$bytes,
                         'user'=>$user,
                         'downloaded'=>$downloaded,
                         'reference'=>$reference
                );

            $request->merge($input);

            Storage::putFile('public',$request->file('file'));

            Asset::create($request->all());

        }else{

            return "No file selected";
        }
    }
}
