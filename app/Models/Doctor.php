<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';


    protected $fillable = [
        'doctor_name',
        'specialization',
        'phone',
        'email',
        'experience',
        'fees',
        'file_upload',
        'status'
        
    ];
}