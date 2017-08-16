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
// inyección de dependencias
Route::bind('product',function($slug){
	return App\Product::where('slug',$slug)->first();
});

Route::bind('category', function($category){
	return App\Category::find($category);
});

Route::bind('user', function($user){
	return App\User::find($user);
});

Route::bind('zone',function($zone){
	return App\Zone::where('id_product',$zone)->get();
});
//
Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);
Route::get('product/{slug}/{cantidad}/{precio}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

Route::get('mail', [
	'as' => 'my-mail',
	'uses' => 'StoreController@myMail'
]);

//Carrito -----------------
Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}/{cantidad}/{precio}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}', [
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{cantidad}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);

Route::get('cart/compra', [
	'as' => 'cart-compra',
	'uses' => 'CartController@compra'
]);

//Auth 
Auth::routes();

Route::get('/home', 'HomeController@index');

//ADMIN***************

Route::group(['namespace' => 'Admin', 'middleware' => ['auth','siadm']], function()
{

	Route::get('admin/home', function(){
		return view('admin.home');
	});

	Route::resource('category', 'CategoryController');

	Route::resource('product', 'ProductController');

	Route::resource('user', 'UserController');

	Route::get('orders', [
		'as'	=> 'admin.order.index',
		'uses'	=> 'OrderController@index'
	]);

	Route::post('admin/order/get-items', [
		'as'	=> 'admin.order.getItems',
		'uses'	=> 'OrderController@getItems'
	]);

	Route::get('order/{id}', [
		'as'	=> 'admin.order.destroy',
		'uses'	=> 'OrderController@destroy'
	]);

	
});

// contact US
	Route::get('contact-us', 'ContactUSController@contactUS');

	Route::post('contact-us', [
		'as'=>'contact-us',
		'uses'=>'ContactUSController@contactUSPost'
	]);

//us
	Route::get('us', 'ContactUSController@us');