<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'patient_name',
        'appointment',
        'doctor',
        'prescription',
        'lab_test',
        'health_records',
        'notification',
        'status'
    ];
}