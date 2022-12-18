<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if ($validator->fails())
            return redirect('admin/login')->withErrors($validator)->withInput();

        if (Auth::guard('admin')->attempt($this->credentials($request))) {
            return view('admin.dashboard');
        }

        $email = Admin::query()->where('email', $request->get('email'))->first();

        if ($email) {
            session()->flash('email', 'Password Is Incorrect!');
            return redirect()->back();
        }
        session()->flash('email', 'Admin Doesnt Exist.');
        return redirect()->back();

    }

    public function credentials($request)
    {
        return $request->only($this->username(), 'password');
    }

    public function username(): string
    {
        return 'email';
    }

    public function logout()
    {
        $user = Auth::guard('admin')->user();
        Auth::logout();
        return redirect()->route('admin.login.form');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function addPatient()
    {
        return view('admin.patients.add');
    }




}
