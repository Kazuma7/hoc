<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->msg]);
    }
}
