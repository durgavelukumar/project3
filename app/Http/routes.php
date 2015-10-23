<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'BookController@getHomePage');
//	Route::get('/', function () {
//    return view('welcome');
//	 return view('pages.landing');
//Route::get('/books', 'BookController@goHomePage');
	
//});

Route::get('/lorem', 'BookController@getLoremPage');
Route::post('/lorem', 'BookController@postLoremPage');


Route::get('/userGen', 'UserGenController@getUserGenPage');
Route::post('/userGen', 'UserGenController@postUserGenPage');

Route::get('/practice', function() {

 //   echo 'Hello World!';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
	
});	
	
Route::get('/books/create', function(){
	$view = '<form method="POST" action="/books/create">';
	$view .= csrf_field();
	$view .= '<input type="text" name="title">';
	$view .= '<input type="submit">';
	$view .= '<form>';
	
	return $view;
	});	
	
Route::post('/books/create', function() {
	return 'Process the creation of a new book:'.$_POST['title'];
});
	
	/**
Route::get('/practice1', function() {

 //   echo 'Hello World!';
	// require the Faker autoloader
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = new Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
  // 'Lucy Cechtelar';
echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
echo $faker->text;
  // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
  // et sit et mollitia sed.
  // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
  // sit minima sint.
	
});	
	**/
Route::get('/books/show/{title}', 'BookController@getShow');	

Route::get('/books', 'BookController@getIndex');



/*
Route::get('/practice', function() {
    echo App::environment();
});
*/
