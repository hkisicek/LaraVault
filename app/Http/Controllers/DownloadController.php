<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DownloadController extends Controller
{
    public function download(Request $request)
    {
        //counting downloads
        DB::table('assett')
            ->where('name', $request->name)
            ->increment('downloaded');

        //downloading file
        $name='/var/www/html/LaraVault/storage/app/public/'.$request->name;
        return response()->download($name);
    }
}
