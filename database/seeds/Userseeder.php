<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// This command will tell the artisan to create 20 fake insertions of the User class
        factory(App\User::class, 1000)->create();
    }
}
