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

// Route::get('/', 'PagesController@root')->name('root');
Route::redirect('/', '/products')->name('root');

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

        // 执行新建
        Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');

        // 修改地址页
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');

        // 执行修改
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');

        // 删除地址
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

        // 收藏商品
        Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
        // 取消收藏
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
        // 收藏商品列表
        Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');

        // 加入购物车
        Route::post('cart', 'CartController@add')->name('cart.add');

        // 查看购物车
        Route::get('cart', 'CartController@index')->name('cart.index');

        // 从购物车移除
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');

        // 创建购物订单
        Route::post('orders', 'OrdersController@store')->name('orders.store');

        // 订单列表
        Route::get('orders', 'OrdersController@index')->name('orders.index');

        // 订单详情
        Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
    });

});

Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
