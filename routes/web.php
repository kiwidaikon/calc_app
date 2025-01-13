<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view/hello', function () {
    return view('message.hello');
});

Route::get('/view/var', function () {
    return view('message.var', ['variable' => 'Hello from web.php']);
});
// 下記の方法でも可
// Route::get('/view/var', function () {
//     $data = ['variable' => 'Hello from web.php'];
//     return view('message.var', $data);
// });

Route::get('/view/word/{msg}', function ($msg) {
    return view('message.word', ['msg' => $msg]);
});


Route::get('/view/word/{name}/{msg}', function ($name, $msg) {
    return view('message.word2', [
        'name' => $name,
        'msg' => $msg
    ]);
});

// Route::<HTTPメソッド>('<アドレス>', [<コントローラーのクラス, 'アクション名>']);
Route::get('/controller/hello', [MessageController::class, 'hello']);

Route::get('/controller/var', [MessageController::class, 'var']);

Route::get('/controller/word/{msg}', [MessageController::class, 'word']);

Route::get('/controller/word/{name}/{msg}', [MessageController::class, 'word2']);
