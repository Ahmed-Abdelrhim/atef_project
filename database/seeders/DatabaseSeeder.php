<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Admin;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // \App\Models\User::factory(10)->create();
        // 'psa' => 'QOsN1675328470.png',
        // 'age' => $faker->randomNumber(2),
        // 'gender' => $faker->numberBetween(0,1),

        for($i = 1 ; $i <= 20; $i++) {
            Doctor::query()->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('12345678'),
                'phone_number' => '011'. $faker->numberBetween(10000000,99999999),
                'address' => $faker->city,
                'image' => 'cfGu1675328470.jpg',
                // 'is_doctor' => 1,
                'id_national_card' => 'Zcin1675337654.jpeg',
                'id_job_card' => 'Zcin1675337654.jpeg',
                'created_at' => Carbon::now(),
            ]);
        }


    }
}


//        'name',
//        'email',
//        'password',
//        'image',
//        'phone_number',
//        'address',
//        'gender',
//        'age',
//        'psa',
//        'medical_history',
//        'doctor_id',
