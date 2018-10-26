<?php

namespace Controllers;

use Models\Booking;

class Bookings
{
    public static function create(array $arr)
    {
        return Booking::create($arr);
    }

    public static function getByCustomerId($customer_id)
    {
        return Booking::with('customer')->where('customer_id', $customer_id)->get();
    }
}
