<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $name;
    public $password;
    public $email;
    public $avatar;
    public $psa;
    public $phone_number;
    public $gender;
    public $age;
    public $medical_history;
    public $doctor_id;
    public $password_confirmation;
    public $doctors;

    public function rules()
    {
        return [
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'avatar' => 'nullable|mimes:jpg,jpeg,png,gif,webp|max:30000',
            'psa' => 'nullable|mimes:jpg,jpeg,png,gif,webp|max:30000',
            'phone_number' => 'nullable|regex:/(01)[0-9]{9}/',
            'gender' => 'nullable|between:0,1',
            'age' => 'nullable|numeric|between:2,100',
            'medical_history' => 'nullable|string|min:8',
            'doctor_id' => 'required|numeric|exists:admins,id',
        ];
    }


    public function render()
    {
        return view('livewire.register');
    }

    public function submit()
    {

        $this->validate();
        $image_name = null;
        if ($this->avatar != '') {
            $image_name = Str::random(4) . time() . '.' . $this->avatar->getClientOriginalExtension();
            $this->avatar->storeAs('patients', $image_name, 'public');
        }

        $psa = null;
        if ($this->psa != null) {
            $psa =  Str::random(4) . time() . '.' .$this->psa->getClientOriginalExtension();
            $this->psa->storeAs('psa', $psa, 'public');
        }
        try {
            DB::beginTransaction();
            User::query()->create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'image' => $image_name,
                'psa' => $psa,
                'age' =>$this->age,
                'phone_number' => $this->phone_number,
                'gender' => $this->gender,
                'medical_history' => $this->medical_history,
                'doctor_id' => $this->doctor_id,
            ]);
        } catch (\Exception $e) {
            session()->flash('error','something went wrong');
            return redirect()->back();
        }
        DB::commit();

        return redirect()->route('login');
    }
}
