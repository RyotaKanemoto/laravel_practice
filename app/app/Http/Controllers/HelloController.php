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
    public function index($id = 'zero')
    {
        $data = [
            'msg' => 'test_message',
            'id' => $id
        ];
        return view('hello.index', $data);
    }
}
