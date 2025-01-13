<?php

use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view/result', function () {
    return view('calcs.result');
});

Route::get('/view/var', function () {
    return view('calcs.var', ['variable' => 'Hello from web.php']);
});
// 下記の方法でも可
// Route::get('/view/var', function () {
//     $data = ['variable' => 'Hello from web.php'];
//     return view('message.var', $data);
// });


Route::get('/view/word/{number_1}/{score}/{number_2}', function ($number_1, $score, $number_2) {
    return view('calcs.word2', [
        'number_1' => $number_1,
        'score' => $score,
        'number_2' => $number_2
    ]);
});

// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/calcs/{number_1}/{score}/{number_2}', [CalcController::class, 'result']);
