<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($number_1, $operator, $number_2)
    {
        
    
         if ($operator == 'addition') {
         $ans = $number_1 + $number_2 ;
     } elseif ($operator == 'subtraction') {
         $ans = $number_1 - $number_2 ;
     } elseif ($operator == 'multiplication') {
         $ans = $number_1 * $number_2 ;
     } elseif ($operator = 'division') {
         $ans = $number_1 / $number_2 ;
} 
return view('calcs.result', ['number_1' => $number_1, 'operator' => $operator, 'number_2' => $number_2,'ans' => $ans]);
    }
}




