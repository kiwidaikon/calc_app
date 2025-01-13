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


Route::get('/view/word/{number1}/{number2}', function ($name, $msg) {
    return view('calcs.word2', [
        'number1' => $number_1,
        'number2' => $score,
        'number2' => $number_2
    ]);
});

// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/calcs/word2/{name}/{msg}', [CalcController::class, 'hallo']);

Route::get('/calcs/result', [CalcController::class, 'result']);

Route::get('/controller/hello', [CalcController::class, 'hello']);
