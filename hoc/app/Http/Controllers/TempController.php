<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです',
        ];
        return view('hello.index', $data);
    }
}
