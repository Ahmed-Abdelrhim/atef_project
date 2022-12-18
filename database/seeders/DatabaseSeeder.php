<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Admin;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user = User::query()->create([
            'name' => 'Ahmed Abdelrhim',
            'email' => 'Ahmed Abdelrhim',
            'password' => 'Ahmed Abdelrhim',
            // 'image' => '',
            'phone_number' => '01152067271',
            'address' => 'Helwan',
            'gender' => '1',
        ]);
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
