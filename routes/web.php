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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get("/", "PatoController@index0");
Route::get("/about", "PatoController@index1");
Route::get("/blog-detail", "PatoController@index2");
Route::get("/blog", "PatoController@index3");
Route::get("/contact", "PatoController@index4");
Route::get("gallery", "PatoController@index5");
Route::get("/menu", "PatoController@index6");
Route::get("/reservation", "PatoController@index7");


Route::get('/user', function () {
    return view('/login');
});

Route::get('/home', function () {
    return view('/home');
});

Route::get('/admin', function () {
    return redirect("/login");
});


Route::get('/dashboard', function () {
    return view('auth.login');
});

//Route::get('/warteg', 'blogController@index');

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/blog', 'blogController@index')->name('resto.blog');
Route::get('/blog/details/{id}', 'blogController@details')->name('resto.details');


//Route::get('/list', 'blogController@index')->name('blog.index');
//Route::get('list/details/{id}', 'blogController@details')->name('blog.details');


Route::get('/admin-login', function () {
    return view('/login');
});

Route::get('dashboard/posts', 'PostsController@index')->name('posts.index');
Route::get('dashboard/posts/details/{id}', 'PostsController@details')->name('posts.details');
Route::get('dashboard/posts/add', 'PostsController@add')->name('posts.add');
Route::post('dashboard/posts/insert', 'PostsController@insert')->name('posts.insert');
Route::get('dashboard/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('dashboard/posts/update/{id}', 'PostsController@update')->name('posts.update');
Route::get('dashboard/posts/delete/{id}', 'PostsController@delete')->name('posts.delete');


Route::match(["GET", "POST"], "/register", function(){
    return redirect("/login");
})->name("register");

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard/users', 'UserController@index')->name('users.index');
Route::get('dashboard/users/create', 'UserController@create')->name('users.create');
Route::get('dashboard/users/edit', 'UserController@edit')->name('users.edit');
Route::get('dashboard/users/show', 'UserController@show')->name('users.show');
Route::resource("/dashboard/users", "UserController");

Route::get('dashboard/categories', 'CategoryController@index')->name('categories.index');
Route::get('dashboard/categories/trash', 'CategoryController@trash')->name('categories.trash');
Route::get('dashboard/categories/{id}/restore', 'CategoryController@restore')->name('categories.restore');
Route::delete('dashboard/categories/{id}/delete-permanent', 'CategoryController@deletePermanent')->name('categories.delete-permanent');
Route::resource('dashboard/categories', 'CategoryController');

Route::get('/ajax/categories/search', 'CategoryController@ajaxSearch');


Route::get('/test/forbidden', function(){
    abort(403, "Anda tidak memiliki hak akses");
});

Route::get('/datatables/users', 'UserDatatablesController@index');
Route::get('/datatables/data', 'UserDatatablesController@data')->name('datatables.data');

Route::get('/test/me', function(){
    return \Auth::user();
});




