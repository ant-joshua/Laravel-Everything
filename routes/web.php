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
Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::get('portfolio', 'PortfolioController@index');

Route::get('contact', [
	'uses'	=>	'ContactController@index',
	'as'	=>	'contact.index'
	]);

Route::post('contact', [
	'uses'	=>	'ContactController@post',
	'as'	=>	'contact.post'
	]);

Route::get('blog', [
	'uses'	=>	'blogController@index',
	'as'	=>	'blog.index'
	]);
Route::get('blog/{blog}', [
	'uses'	=>	'blogController@show',
	'as'	=>	'blog.show'
	]);

Route::post('blog/{comment}', [
	'uses'	=>	'blogController@commentpost',
	'as'	=>	'blog.comment.post'
	])->middleware('verify');

Route::get('video', [
	'uses'	=>	'VideoController@index'
	]);

Route::get('forum', [
	'uses'	=>	'ForumController@index',
	'as'	=>	'forum.index'
	]);

Route::get('forum/create', [
	'uses'	=>	'ForumController@create',
	'as'	=>	'forum.create'
	])->middleware('verify');

Route::post('forum/create', [
	'uses'	=>	'ForumController@post',
	'as'	=>	'forum.post'
	])->middleware('verify');

Route::post('forumcomment/{comment}', [
	'uses'	=>	'ForumController@commentpost',
	'as'	=>	'forum.comment.post'
	])->middleware('verify');

Route::get('forum/{forum}', [
	'uses'	=>	'ForumController@show',
	'as'	=>	'forum.show'
	]);

Route::get('profile', [
	'uses'	=>	'ProfileController@index',
	'as'	=>	'profile.index'
	]);

Route::get('admin', [
	'uses'	=>	'AdminController@index',
	'as'	=>	'admin.index'
	]);

Route::get('admin/slider', [
	'uses'	=>	'AdminController@sliderindex',
	'as'	=>	'admin.slider.index'
	]);

Route::get('admin/slider/create', [
	'uses'	=>	'AdminController@slidercreate',
	'as'	=>	'admin.slider.create'
	]);

Route::post('admin/slider/create', [
	'uses'	=>	'AdminController@sliderpost',
	'as'	=>	'admin.slider.post'
	]);

Route::get('admin/portfolio', [
	'uses'	=>	'AdminController@portfolioindex',
	'as'	=>	'admin.portfolio.index'
	]);

Route::get('admin/portfolio/create', [
	'uses'	=>	'AdminController@portfoliocreate',
	'as'	=>	'admin.portfolio.create'
	]);

Route::post('admin/portfolio/create', [
	'uses'	=>	'AdminController@portfoliopost',
	'as'	=>	'admin.portfolio.post'
	]);

Route::get('admin/blog', [
	'uses'	=>	'AdminController@blogindex',
	'as'	=>	'admin.blog.index'
	]);

Route::get('admin/blog/notpublished', [
	'uses'	=>	'AdminController@blognotpublish',
	'as'	=>	'admin.blog.notpublish'
	]);

Route::get('admin/blog/create', [
	'uses'	=>	'AdminController@blogcreate',
	'as'	=>	'admin.blog.create'
	]);

Route::post('admin/blog/create', [
	'uses'	=>	'AdminController@blogpost',
	'as'	=>	'admin.blog.post'
	]);

Route::get('admin/blog/banner', [
	'uses'	=>	'AdminController@blogbanner',
	'as'	=>	'admin.blog.banner'
	]);

Route::post('admin/blog/banner', [
	'uses'	=>	'AdminController@blogbannerpost',
	'as'	=>	'admin.blog.banner.post'
	]);

Route::get('product', [
	'uses'	=>	'ProductController@index',
	'as'	=>	'product.index'
	]);