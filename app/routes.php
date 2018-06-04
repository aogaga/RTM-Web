<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|return User::find(1)->toJson();
*/

Route::get('/', 'PagesController@index');



//login routes 
Route::get('/login', 'PagesController@index');
Route::post('/login', 'PagesController@login');
Route::get('/logout', 'PagesController@logout');


Route::controller('api', 'ApiController');

Route::group(array('before' => 'auth'), function() {
Route::get('/dashboard', 'PagesController@admin');

Route::get('/customers', 'PagesController@customers');
Route::post('/customers', 'PagesController@findcustomers');
Route::get('/viewCustomers/{id}', 'PagesController@viewcustomers');


Route::get('/reps', 'PagesController@reps');
Route::post('/reps', 'PagesController@searchReps');

});



Route::get('tdp', function(){


	   $rep = Salesrep::find(1);
		$customer = Customer::find(4);

		$order = new Order();
		$order->details ="50 packets of cigarrets";
		$order->amount = "600";
		$order->customer()->associate($customer);
		//$order->salesrep()->associate($rep);
		$order->save();
		$rep->orders()->save($order);
		
		 



	return "DONE AND DUSTED";
});