<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ReController extends Controller
{
    //引数に追加するだけでインスタンスが生成され使えるようになる
    public function index(Request $request, Response $response)
    {
        $html = <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body {font-size:16pt; color:#999; }
        h1 {font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
        </style>
        </head>
        <body>
            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
        </body>
        </head>
        EOF;

        $response->setContent($html);
        return $response;
    }
}
