<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function hello()
    {
        return view('calcs.hello');
    }
    public function word2($number_1, $score, $number_2)
    {
        return view('calcs.word2', ['number_1' => $number_1, 'score' => $score, 'number_2' => $number_2]);
    }

    public function var()
    {
        return view('calcs.var', ['variable' => 'Hello from CalcController']);
    }
}
