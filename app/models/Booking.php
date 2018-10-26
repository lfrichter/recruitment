<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['customerID', 'booking_reference', 'booking_date'];
    protected $dates = ['booking_date'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('\Models\Customer');
    }
}
