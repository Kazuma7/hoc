<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index()
    {
        $data = ['msg'=>'これはコントローラから渡されたメッセージです。'];
        return view('hello.index', $data);
    }
}
