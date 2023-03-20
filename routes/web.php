<?php
use Illuminate\Http\Request;
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

Route::get('/login', function () {
    return view('login');
});

Route::POST('/login_proses', function (Request $request) {
    dd($request);
});

Route::get('/there', function () { 
    return "ini page untuk latihan route redirect";
});

Route::redirect('/here', '/there');
// '/here' merupakan URL asal
// '/there' merupakan URL tujuan

Route::view('/welcome', 'welcome', ['title' => 'Nania']);
// route akan menjalankan ke folder view yang mengarah pada 
// file welcome dan mengubah title menjadi Nania.

Route::get('users/{name?}', function($name = "nania") {
      return "Welcome " .$name;
});

Route::get ('users/{id?}', function($id = nania) {
    return " Welcome " .$id;
});
Route::get('users/{name?}', function($name) {
    return "Welcome " .$name;
})->where('name', '[A-Za-z]+');

Route::get('user', 'ManagementUserController@index');

Route::resource('user', 'ManagemenetUserController');

