<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. maxdb_thread_safe(oid)
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return 1;
// });


Route::get('/','indexController@getIndex');

Route::get('/events','eventsController@getEvents');

Route::get('/products','productsController@getProducts');

Route::post('/search','productsController@search');

Route::get('/about','aboutController@getAbout');

Route::get('/services','servicesController@getServices');

Route::get('/login','loginController@getLogin');


/*
-------------------------------------------------------admin-----------------------------------------------------------------
*/



Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('add',['as'=>'admin.frontend.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.frontend.postAdd','uses'=>'CateController@postAdd']);
		Route::get('list',['as'=>'admin.frontend.getList','uses'=>'CateController@getList']);
		Route::get('delete/{id}',['as'=>'admin.frontend.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.frontend.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.frontend.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'products'],function(){
		Route::get('add',['as'=>'admin.products.getAdd','uses'=>'productsController@getAdd']);
		Route::post('add',['as'=>'admin.products.postAdd','uses'=>'productsController@postAdd']);
		Route::get('list',['as'=>'admin.products.getList','uses'=>'productsController@getList']);

	});
});
Route::get('admin','adminController@getAdmin');


// Ajax

Route::get('/loadProducts','productsController@loadProducts');
Route::get('/loadHousehold','HouseholdController@loadHousehold');
Route::get('/loadFrozen','FrozenController@loadFrozen');
Route::get('/loadVegetables','VegetablesController@loadVegetables');
Route::get('/loadBread','BreadController@loadBread');
Route::get('/loadDrinks','DrinksController@loadDrinks');
Route::get('/loadPet','PetController@loadPet');
Route::get('/loadKitchen','KitchenController@loadKitchen');
Route::get('/loadShort','ShortController@loadShort');





// search
Route::get('/search1',function(){
	return view('frontend.search');
});
Route::get('/search','SearchController@Search');