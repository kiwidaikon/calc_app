<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($number_1, $score, $number_2)
    {
        return view('calcs.result', ['number_1' => $number_1, 'score' => $score, 'number_2' => $number_2]);
    }
}
