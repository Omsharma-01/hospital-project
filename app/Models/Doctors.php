<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'doctors';


    protected $fillable = [
        'doctors_name',
        'specialization',
        'phone',
        'email',
        'experience',
        'fees',
        'status'
        
    ];
}