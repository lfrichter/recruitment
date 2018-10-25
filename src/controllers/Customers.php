<?php

namespace Controllers;

use Models\Customer;

class Customers
{
    public static function create_customer(array $arr)
    {
        $customer = Customer::create($arr);

        return $customer;
    }

    // public static function get_customers_with_answers()
    // {
    //     $customers = Customer::with('answers')->get()->toArray();

    //     return $customers;
    // }

    // public static function get_customers_with_users()
    // {
    //     $customers = Customer::with('user')->get()->toArray();

    //     return $customers;
    // }

    // public static function get_customer_answers_upvotes($customer_id)
    // {
    //     $customers = Customer::find($customer_id)->answers()->with('upvotes')->get()->toArray();

    //     return $customers;
    // }

    // public static function delete_customer($customer_id)
    // {
    //     $customer = Customer::find($customer_id);
    //     $deleted = $customer->delete();

    //     return $deleted;
    // }
}
