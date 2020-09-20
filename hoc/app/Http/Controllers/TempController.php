<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index($id = 'zero')
    {
        $data = [
            'msg' => 'これはコントローラから渡されたメッセージです。',
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
