<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientProfile extends Component
{
    public $name;
    public $email;
    public $password;
    public $gender;

    public function render()
    {
        return view('livewire.patient-profile');
    }
}
