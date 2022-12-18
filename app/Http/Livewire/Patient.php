<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Patient extends Component
{
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;

    public function rules()
    {
        return [
            'name' => 'required|string|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'phone' => 'nullable|regex:/(01)[0-9]{9}/',
            'address' => 'nullable|string|min:8'
        ];
    }

    public function render()
    {
        return view('livewire.patient');
    }

    public function addPatient()
    {
        $this->validate();
        User::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'address' => $this->address,
            'phone_number' => $this->phone,
        ]);
        session()->flash('success','patient inserted successfully');
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->address = '';
        $this->phone = '';
    }
}
