<?php

namespace App\Http\Livewire;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class BecomeDoctor extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $personal_image;
    public $id_national_card;
    public $id_job_card;

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:8',
            'email' => 'required|email|unique:doctors,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|regex:/(01)[0-9]{9}/|unique:doctors,phone_number',
            'address' => 'nullable|string|min:8',
            'personal_image' => 'required|mimes:jpg,png,jpeg|max:3000',
            'id_national_card' => 'required|mimes:jpg,png,jpeg|max:3000',
            'id_job_card' => 'required|mimes:jpg,png,jpeg|max:3000',
        ];
    }

    public function render()
    {
        return view('livewire.become-doctor');
    }

    public function addDoctor()
    {
        $this->validate();
        $personal_image_name = $this->imageFile($this->personal_image);
        $id_national_card_name = $this->imageFile($this->id_national_card);
        $id_job_card_name = $this->imageFile($this->id_job_card);
        Doctor::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'address' => $this->address,
            'phone_number' => $this->phone,
            'image' => $personal_image_name,

            'id_national_card' => $id_national_card_name,
            'id_job_card' => $id_job_card_name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        session()->flash('success', 'your data sent successfully to the admin of the website');

        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->address = '';
        $this->personal_image = '';
        $this->id_national_card = '';
        $this->id_job_card = '';

    }

    public function imageFile($file): string
    {
        $name = str::random(4) . time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('doctor_files/'.$this->email, $name, 'public');
        return $name;
    }

}
