<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // public function showWelcome()
    // {
    //     return view('welcome');
    // }

 //    public function rollDice($guess)
 //    {
 //    	$numberOfRolls = 6;
 //    	$rolls = [];
 //    	for ($i = 0; $i < $numberOfRolls; $i++);
 //    			$frolls[] = mt_rand(1,6);
 //    }
    
 //    return view('dice'->with([
 //    	'rolls' => $rolls,
 //    	'guess' => $guess,
    	
 //    	]));

	// }

	// public function uppercase($word)
	// {
	// 	return  strtoupper("$word");
	// }

	// public function increment($number = 1) {
	// return  $number + 1;
	// }



	public function rolldice()
	{

	$die1 = mt_rand(1,6) . PHP_EOL;
	$die2 = mt_rand(1,6) . PHP_EOL;
	$data['die1'] = $die1;
	$data['die2'] = $die2;
	// echo $die1;
	// echo $die
	// var_dump($die1);
	// var_dump($die2);
	// echo $die1 + $die2;
	return view('exercises.rolldice2')->with($data);
	}
}