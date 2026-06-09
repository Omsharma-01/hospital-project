<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';

    protected $fillable = [
        'patient_name',
        'doctor_id',
        'appointment_date',
        'appointment_time',
        'reason',
        'status'
    ];
}