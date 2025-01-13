<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function hello()
    {
        return view('message.hello');
    }

    public function var()
    {
        return view('calcs.var', ['variable' => 'Hello from CalcController']);
    }

    public function word($msg)
    {
        return view('message.word', ['msg' => $msg]);
    }
    public function word2($name, $msg)
    {
        return view('message.word2', ['name' => $name, 'msg' => $msg]);
    }
}
