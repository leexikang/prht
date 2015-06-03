<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\Place;
use App\User;

class PlacesTableSeeder extends Seeder
{
    public function run()
    {
        $city = ['Mandalay', 'Yangon', 'Sagaing'];
        $images = [1, 2, 3];
        $user = User::lists('id');
        $faker = Faker::create();

        foreach(range(1, 20) as $index){

            Place::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'description' => $faker->paragraph(2),
                'state' => $faker->randomElement($city),
                'city' => $faker->randomElement($city),
                'photo' => $faker->randomElement($images) . ".jpg",
                'user_id' => $faker->randomElement($user)
            ]);
        }
        // TestDummy::times(20)->create('App\Post');
    }
}
