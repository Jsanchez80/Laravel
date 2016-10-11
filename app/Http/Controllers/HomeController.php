<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function rollDice($guess)
    {
    	$numberOfRolls = 6;
    	$rolls = [];
    	for ($i = 0; $i < $numberOfRolls; $i++);
    			$frolls[] = mt_rand(1,6);
    }
    return view('dice'->with([
    	'rolls' => $rolls,
    	'guess' => $guess,
    	
    	]));
}