<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $table = 'doctors';
    protected $fillable = ['name','email','password','phone_number','address','image','id_national_card','id_job_card','created_at','updated_at'];
    protected $hidden = ['password','created_at','updated_at'];
    public $casts = [
        'created_at' => 'datetime:Y-m-d H:00',
        'updated_at' => 'datetime:Y-m-d H:00',
        'phone_number' => 'integer'
    ];
}
