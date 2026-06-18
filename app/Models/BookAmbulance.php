<?php
// app/Models/BookAmbulance.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAmbulance extends Model
{
    protected $table = 'Book_ambulance';

    protected $fillable = [
        'full_name',
        'pickup_location',
        'drop_location',
        'mobile_no',
        'booking_date',
        'last_update',
        'user_id',
        'status'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Accessor for status badge class
    public function getStatusBadgeAttribute()
    {
        $badges = [
            'pending' => 'status-pending',
            'confirmed' => 'status-confirmed',
            'in-transit' => 'status-in-transit',
            'completed' => 'status-completed',
            'cancelled' => 'status-cancelled',
        ];
        return $badges[$this->status] ?? 'status-pending';
    }
}