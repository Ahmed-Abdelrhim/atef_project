<?php

namespace App\Http\Controllers\Play;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
