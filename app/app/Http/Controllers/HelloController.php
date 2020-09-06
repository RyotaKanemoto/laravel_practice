<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $body;

$body = "global body";

class HelloController extends Controller
{
    public function index($id = 'noname', $pass = 'nopass') {
        return <<<EOF
<html>
    <body>
        hello
        <ul>
            <li>ID: {$id}</li>
            <li>pass: {$pass}</li>
            <li><a = href="hello/other">other</a></li>
        </ul>
    </body>
</html>
EOF;
    }

    public function other() {
        global $body;
        return "<html><body>" . $body . "</body></html>";
    }
}
