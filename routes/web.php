<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo "Laravel Hello World";
});

// create an item 
Route::post('test', function () {
    echo "POSTED";
});

// read an item
Route::get('test', function () {
    echo '<form action="test" method="POST">';
    echo '<input type="submit" value="submit">';
    echo '<input type="hidden" name="_token" value="'.csrf_token().'">';
    echo '<input type="hidden" name="_method" value="PUT">';
    echo '</form>';
});

// update item 
Route::put('test', function () {
    echo "PUT";
});

//delete item
Route::delete('test', function () {
    echo 'DELETE';
});

Route::get('test123','TestController@index');

Route::get('customer/{id}',function($id){
    $customer = App\Customer::find($id);
    echo 'Hello my name is '.$customer->name; 
});

Route::get('get_customer',function(){
    $customer = App\Customer::where('name','=','bob')->first();
    echo $customer->name;
});