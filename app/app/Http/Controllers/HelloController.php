<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $body;

$body = "global body";

class HelloController extends Controller
{
//     public function index(Request $request, Response $response) {
//         return <<<EOF
// <html>
//     <body>
//         hello
//         <ul>
//             <li>request: <pre>{$request}</pre></li>
//             <li>response: <pre>{$response}</pre></li>
//         </ul>
//     </body>
// </html>
// EOF;
//     }
//
//     public function other() {
//         global $body;
//         return "<html><body>" . $body . "</body></html>";
//     }
    public function index(Request $request)
    {
        $data = [
            'msg' => 'お名前を入力してください',
        ];
        return view('hello.index', $data);
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
