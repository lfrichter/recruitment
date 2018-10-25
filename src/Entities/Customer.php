<?php

namespace Src\Entities;

class Customer
{
    public $title;
    public $firstName;
    public $last_name;
    public $address;

    public function saveCustomer()
    {
        $db = new mysqli('database', 'testuser', 'password', 'test', DB_PORT);
        $db->query('INSERT INTO customers (first_name, second_name) VALUES (\''.$this->firstName.'\', \''.$this->last_name.'\', \''.$this->address.'\')');
    }

    public function get_our_customers_by_surname()
    {
        $db = new \mysqli('database', 'testuser', 'password', 'test', DB_PORT);
        $res = $db->query('SELECT * FROM customers ORDER BY second_name');

        return $res->fetch_assoc();
    }

    public function formatNames($firstName, $surname)
    {
        return $firstName.' '.$surname;
    }

    public function findById(string $id)
    {
        $db = new \mysqli('127.0.0.1', 'testuser', 'password', 'test', DB_PORT);
        $res = $db->query('SELECT * FROM customers WHERE id = \''.$id.'\'');
        mysqli_close($db);

        return $res;
    }

    /**
     * Get all the customers from the database and output them.
     */
    public function getAllCustomers()
    {
        $db = new \mysqli('127.0.0.1', 'testuser', 'password', 'test', DB_PORT);

        $res = $db->query('SELECT * FROM customers');
        echo '<table>';
        while ($result = $res->fetch_assoc()) {
            echo '<TR>';
            echo '<TD>'.$result['first_name'].'</ td>';
            echo '<td>'.$result['second_name'].'</ TD>';
            echo '</tr>';
        }

        echo '</table>';
    }
}
