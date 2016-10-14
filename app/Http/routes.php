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

// Route::get('/', function () {
//     return view('welcome');
// });


// // You can type the return command with double quotes and not have to concatonate:
// 	// return "Hello $name";
// Route::get('/sayhello/{name}', function($name) {
// 	return 'Hello ' . $name;
// });

// // you can customize the user experience by coding the name as so...
// Route::get('/sayhello/{name?}', function($name = 'Lassen') {
// 	return 'Hello ' . $name;
// });

// // if you wanted to keep a person named Chris from seeing the message, you could 
// // redirect them to the home page by using the following code:

// Route::get('/sayhello/{name}', function($name) {
// 	if ($name == 'Chris') {
// 		return redirect('/');
// 	}
// 	return 'Hello ' . $name;
// });
// // route at the path /uppercase that takes a parameter that is a word and returns a string that is the word in all caps.
// Route::get ('/uppercase/{word}', function($word) {
// 	return  strtoupper("$word");
// });

Route::get ('/uppercase/{word}','HomeController@uppercase');

// route at the path /increment that takes a parameter that is a number and returns the number plus one.
// Route::get('/increment/{number?}', function($number = 1) {
// 	return  $number + 1;
// });

Route::get('/increment/{number?}', 'HomeController@Increment');

// Route::get('/add/{a?}/{b?}', function($a = 2, $b = 1)) {
// 	return $a + $b;
// });


// Route::get('/', function () {
// 	return view('my-first-view.php');
// });


// Route::get('/', function () {
// 	$name = 'Cameron';
// 	// Camerons perferred way of passing data to the view:
// 	$data['name'] = $name;
// 	return view('my-first-view.php')->with($data);
// 	// other ways Cameron does not like, but the syntax will work and you may see it. 
// 	// return view('my-first-view', $data);
// 	// return view('my-first-view')->with('name', $name);

// 	// // Camerons perferred way of passing data to the view:
// 	// $your_name = 'Fer'
// 	// $data['name'] = $name;
// 	// $data['your_name'] = $your_name;
// 	// return view('my-first-view.php')->with('my_name', $my_name)->with('your_name', $your_name);

// });

// Route::get('/rolldice', function(){
// 	$die1 = mt_rand(1,6) . PHP_EOL;
// 	$die2 = mt_rand(1,6) . PHP_EOL;
// 	$data['die1'] = $die1;
// 	$data['die2'] = $die2;
// 	// echo $die1;
// 	// echo $die
// 	// var_dump($die1);
// 	// var_dump($die2);
// 	// echo $die1 + $die2;
// 	return view('exercises.rolldice')->with($data);
// });

Route::get('/rolldice', 'HomeController@rolldice');

// // Route::get('/rolldice/{guess?}', function($guess = 1) {
// //     $data['dice_roll'] = mt_rand(1, 6);
// //     $data['guess'] = $guess;
// //     $data['correct'] = ($data['dice_roll'] == $data['guess']);
// //     return view('roll-dice')->with($data);
// // });



// Route::get('/rolldice2', function(){
// 	$die1 = mt_rand(1,6) . PHP_EOL;
// 	$die2 = mt_rand(1,6) . PHP_EOL;
// 	$data['die1'] = $die1;
// 	$data['die2'] = $die2;
// 	// echo $die1;
// 	// echo $die2;
// 	// var_dump($die1);
// 	// var_dump($die2);
// 	// echo $die1 + $die2;
// 	return view('exercises.rolldice2')->with($data);
// });



// // get('/test', 'HomeController@test')

Route::resource('posts', 'PostsController');

// Route::get('orm-test', function ()
// {

// 	$post1 = new \App\Models\Post();
// 	$post1->title = 'Eloquent is awesome!';
// 	$post1->url='https://laravel.com/docs/5.1/eloquent';
// 	$post1->content  = 'It is super easy to create a new post.';
// 	$post1->created_by = 1;
// 	$post1->save();

// 	$post2 = new \App\Models\Post();
// 	$post2->title = 'Eloquent is really easy!';
// 	$post2->url='https://laravel.com/docs/5.1/eloquent';
// 	$post2->content = 'It is super easy to create a new post.';
// 	$post2->created_by = 1;
// 	$post2->save();

//     // test code here
// });

// Route::resources('users', 'UsersController');




