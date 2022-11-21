<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function showForm()
    {
        return view('doctors.become-doctor');
    }
}
