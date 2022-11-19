<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function patientProfileForm()
    {
        return view('patient.profile');
    }

    public function logout()
    {
        Auth::logout();
        return view('patient.auth.login');
    }
}
