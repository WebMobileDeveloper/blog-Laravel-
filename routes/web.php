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

/*Route::get('/', function () {
    return view('welcome');
});*//*
Route::get('/',function (){
   echo "<h2>This is Home Page</h2>";
});*/
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function (){
   echo "<h2>This is about Page</h2>";
});
Route::get('/contact',function (){
    echo "<h2>This is Contact Page</h2>";
});
Route::get('/getData',function (){
    $fetchData = DB::select('select * from users where id=?',array(1));
    echo "<pre>";
    print_r($fetchData);
    echo "</pre>";
});

Route::post('foo', function(){
    print_r($_REQUEST);
});

Route::get('foo', function(){
    echo '<form method="POST" action="foo">';
    echo 'Enter Name:<input type="text" name="name">';
    echo '<input type="submit">';
    echo csrf_field();
    echo '</form>';

});

Route::put('update', function()
{
    $name=$_REQUEST['name'];
    $id=$_REQUEST['id'];
    $affected = DB::update("UPDATE users set name='$name' where id = ?", [$id]);
    echo $affected==1?"Successfully Updated":"UPdate Fail";
});

Route::get('update', function(){
    $fetchData = DB::select('select * from users where id = ?', array(1));
    echo '<form method="POST" action="update">';
    echo "Update Name: <input type=\"text\" name=\"name\" value=\"{$fetchData[0]->name}\">";
    echo "<input type=\"hidden\" value=\"{$fetchData[0]->id}\" name=\"id\">";
    echo '<input type="hidden" value="PUT" name="_method">';
    echo '<input type="submit">';
    echo csrf_field();
    echo '</form>';
});*/
Route::get('/',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getData', function()
{
    $fetchData = DB::select('select * from users where id = ?', array(1));
    echo "<pre>";
    print_r($fetchData);
    echo "</pre>";
});