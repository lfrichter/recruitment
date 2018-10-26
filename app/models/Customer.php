<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['first_name', 'second_name'];
    public $timestamps = false;

    public function bookings()
    {
        return $this->hasMany('\Models\Booking');
    }

    public function getFullName()
    {
        return $this->first_name.' '.$this->second_name;
    }
}
