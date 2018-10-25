<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show result</title>
</head>
<body>
        
<?php
    $customer = new Customer();
    $customer->firstName = 'Jim';
    $customer->last_name = 'Johnson';

    echo $customer->firstName;
    echo ' ' . $customer->last_name;


    $customer->saveCustomer();
    die();
    $customers = $customer->get_our_customers_by_surname();

    while ($customers) {
        echo $customer->formatNames($result['first_name'], $result['second_name']);
    }

    $customer->getAllCustomers();
    $bookings = new Booking();
    $results = @$bookings->GetBookings($_GET['customerId']);

    foreach ($results as $result) :
        echo $result['booking_reference'] . ' - ' . $result['customer_name'] . $result['booking_date'];
    endforeach;
    ?>
</body>
</html>