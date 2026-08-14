<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tra cứu hành trình đơn hàng
|--------------------------------------------------------------------------
|
| Đặt route này trong routes/web.php, phía trên route động:
| Route::get('{slug}', 'KeyController@checkKey')->name('checkKey');
|
*/

Route::view('/tra-cuu-don-hang', 'frontend.pages.tra-cuu-don-hang')
    ->name('tracking.index');

