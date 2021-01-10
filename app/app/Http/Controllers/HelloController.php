<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $body;

$body = "global body";

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            ['name' => 'yamada', 'mail' => 'yamada@'],
            ['name' => 'tanaka', 'mail' => 'tanaka@'],
            ['name' => 'suzuki', 'mail' => 'suzuki@'],
        ];
        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;

        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん',
        ];

        return view('hello.index', $data);
    }
}
