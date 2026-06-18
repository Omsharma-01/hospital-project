<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospital';

    protected $fillable = [
        'name',
        'address',
        'city',
        'pin_code',
        'email',
        'status',
    ];
}
