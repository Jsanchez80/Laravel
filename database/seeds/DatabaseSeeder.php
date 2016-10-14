<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //  This command will run your seeder for the UserTableSeeder
        // $this->call(UserTableSeeder::class);

        //  This command will run your seeder for the UserSeeder and PostSeeder
         $this->call(Userseeder::class);
         $this->call(PostSeeder::class);

        Model::reguard();
    }
}
