<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@root')->name('root');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	// 提示需要验证邮箱
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    // 邮箱验证
    Route::get('/email_verification/verify', 'EmailVerificationController@verify')->name('email_verification.verify');
    // 重新发送验证邮件
    Route::get('/email_verification/send', 'EmailVerificationController@send')->name('email_verification.send');

    // 是否已验证中间件
    Route::group(['middleware' => 'email_verified'], function() {
    	// 用户地址列表
        Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');

        // 地址新建页
        Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');

        // 新建地址
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    });

});
