<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function patientProfileForm()
    {
        $doctor = null;
        if (Auth::user()->doctor_id != null)
        {
            $doctor_id = Auth::user()->doctor_id;
            $doctor = Admin::query()->where('id',$doctor_id)->first();
            // return $doctor;
        }

        return view('patient.profile',['doctor' => $doctor]);
    }

    public function logout()
    {
        Auth::logout();
        return view('patient.auth.login');
    }
}
