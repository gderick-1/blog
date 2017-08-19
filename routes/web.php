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



Route::group(['middleware'=> ['web']], function (){
    Route::get('/', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'home.index'
    ]);

    Route::get('/blog', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'home.index'
    ]);

    Route::get('/blog/{post_id}&{end}', [
        'uses' => 'PostController@getSinglePost',
        'as' => 'home.single'
    ]);

/*Other Routes*/
    Route::get('/about', function (){
        return view('frontend.other.about');
    })->name('about');

    Route::get('/contact', [
        'uses' => 'ContactMessageController@getContactIndex',
        'as' => 'contact'
    ]);

    Route::group(['prefix' => '/admin'], function (){
        Route::get('/', [
            'uses' => 'AdminController@getAdminIndex',
            'as' => 'admin.index'
        ]);

        Route::get('/blog/posts', [
            'uses' => 'PostController@getPostIndex',
            'as' => 'admin.blog.index'
        ]);

        Route::get('/blog/post/{post_id}&{end}',[
            'uses' => 'PostController@getSinglePost',
            'as' => 'admin.blog.post'
        ]);
        Route::get('/blog/posts/create', [
            'uses' => 'PostController@getCreatePost',
            'as' => 'admin.blog.create_post'
        ]);

        Route::post('/blog/posts/create', [
            'uses' => 'PostController@postCreatePost',
            'as' => 'admin.blog.post.create'
        ]);
    });
});