<?php

namespace Controllers;

use Models\Customer;

class Customers
{
    public static function create(array $arr)
    {
        return Customer::create($arr);
    }

    public static function get($orderBy = 'second_name', $sort = 'ASC')
    {
        return Customer::orderBy($orderBy, $sort)->get();
    }

    public static function getByName($first_name, $second_name)
    {
        return Customer::where('first_name', $first_name)->where('second_name', $second_name)->first();
    }

    public static function firstOrCreate($first_name, $second_name)
    {
        $customer = Customers::getByName($first_name, $second_name);

        if (empty($customer)) {
            $customer = Customers::create(compact('first_name', 'second_name'));
        }

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
