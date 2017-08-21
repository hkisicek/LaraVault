<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        if(Storage::disk('public')->exists($request->name)) {

            $name = '/var/www/html/LaraVault/storage/app/public/' . $request->name;

            //download counter
            DB::table('assett')
                ->where('name', $request->name)
                ->increment('downloaded');

            //downloading file
            return response()->download($name);
        }
        else{
            return "Sorry, this file no longer exists. :(";
        }
    }
}
