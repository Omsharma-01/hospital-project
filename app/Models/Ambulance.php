<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ambulance extends Model
{
    protected $table = 'ambulance';


    protected $fillable = [
        'ambulance_name',
        'ambulance_no',
        'driver_name',
        'address',
        'file_upload',
        'status'
        
    ];
}