<?php

namespace App\Http\Controllers\Play;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProblemsController extends Controller
{
    public function twoSums($target)
    {
        if (!is_numeric($target))
            return view('errors.404');
        $value = [];
        $arr = [3,2,4];
        for ($i = 0; $i < count($arr); $i++) {
            for ($j=0;$j<count($arr);$j++) {
                if ($i == $j)
                    continue;
                if ($arr[$i] + $arr[$j] == $target)
                    return $value = [$i , $j];
            }
        }
        return $value;
    }

    public function checkUser()
    {
        if (Auth::check() )
            return 'true';
        return 'false';
    }

    public function createFakeUsers()
    {
        if (auth()->check())
            return redirect()->route('home');
    //        $faker = Faker::create();
    //        $users = User::query()->get();
    //        $doctors = Doctor::query()->pluck('id');
    //        $doctors_count = Doctor::query()->count();
    //
    //
    //        foreach ($users as $user) {
    //            $user->doctor_id = $doctors[$faker->randomNumber(1,$doctors_count - 1)];
    //            $user->save();
    //        }
    //        return 'Done';
    }
}
