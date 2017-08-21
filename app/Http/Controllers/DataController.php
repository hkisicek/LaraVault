<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //show view
    public function index()
    {
        $data=Asset::all();
        return view('data.data')->with('data',$data);
    }
}
