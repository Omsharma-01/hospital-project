<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patient';

    protected $fillable = [
        'patient_name',
        'age',
        'gender',
        'phone_number',
        'boold_group',
        'address',
        'assigned_doctor',
        'status'
    ];
}