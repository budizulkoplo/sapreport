<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BoxHistory extends Controller
{
    public function index()
    {
        // return view('index');
        $data = DB::select('SELECT top 10 CBPACK from Temp_ZTMM000');
        // dd($data);
        $datas = array(
            'title' => 'test',
            'data' => $data,
        );
        return view('contents.boxhistory',  ['datas' => $datas]);
    }
}
