<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\User;


class UserTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index){

            User::create([
                'name' => $faker->name,
                'password' => 'pass',
                'email' => $faker->email
            ]);
        }
            User::create([
                'name' => 'Minsan',
                'password' => 'pass',
                'email' => 'leexikang@gmail.com'
            ]);
    }
}
