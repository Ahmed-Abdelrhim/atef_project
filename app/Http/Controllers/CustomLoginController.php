<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CustomLoginController extends Controller
{
    public function showRegisterForm()
    {
        return view('patient.auth.register');
    }

    public function registerPatient(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'nullable|regex:/(01)[0-9](9)/',
            'password' => 'required|string|min:6|confirmed',
            'avatar' => 'nullable|mimes:jpg,jpeg,png,gif,webp|max:30000',
            'psa' => 'nullable|mimes:jpg,jpeg,png,gif,webp|max:30000',
            'gender' => 'nullable|between:0,1',
            'medical_history' => 'nullable|string|min:8',
        ]);
        if ($validator->fails())
            return redirect('register/patient')->withErrors($validator)->withInput();
        $image_name = null;
        if ($request->has('avatar')) {
            // return $request;
            // $image_name = $this->handleImage($request, 'studentImages');
            $image_name = time() . '.' . $request->file('avatar')->getClientOriginalExtension();
            $name = $request->file('avatar')->storeAs('patients', $image_name, 'public');
        }
        DB::beginTransaction();
        User::query()->create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'avatar' => $image_name,
        ]);
        DB::commit();
        return redirect()->route('login');
    }


    public function showLoginForm()
    {
        return view('patient.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails())
            return redirect('login/patient')->withErrors($validator)->withInput();

        if (Auth::attempt($this->credentials($request))) {
            return view('patient.patient-home');
        }
        //return $request;

        $email = User::query()->where('email',$request->email)->first();
        // return $email;
        if ($email) {
            // return 'email exists';
            session()->flash('email','Password Is Incorrect!');
            return redirect()->back();
        }
        session()->flash('email','Email doesnt exist sign up now!');
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
        $user = Auth::user();
        Auth::logout();
        return redirect()->route('login');
    }

    public function handleImage($request, $folder): string
    {
        $image_name = time() . '.' . $request->get('avatar')->getClientOriginalExtension();
        $request->file('avatar')->storeAs($folder, $image_name);
        return $image_name;
    }
}
