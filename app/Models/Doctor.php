<?php
// app/Models/Doctor.php

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
        'status',
        'about_us',
    ];

    // Relationships
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    // Accessor for full name with title
    public function getFullNameAttribute()
    {
        return 'Dr. ' . $this->doctor_name;
    }
}