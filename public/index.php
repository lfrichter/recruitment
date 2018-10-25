<?php
header('Content-type: text/html; charset=utf-8');

include_once '../config.php';

// require_once  __DIR__ . '/../vendor/autoload.php';

// spl_autoload_register(null, false);
// spl_autoload_extensions('.php, .class.php');

function autoloadModel($class)
{
    $arquivo = DIR_CLASS_MODEL . $class . '.class.php';

    if (is_readable($arquivo)) {
        require_once $arquivo;
    } else {
        return false;
    }
}

spl_autoload_register('autoloadModel');

// phpinfo(); die();
// $path_customer = __DIR__ . '/../src/Entities/Customer.php';
// echo $path_customer ;

// include($path_customer);
// include_once '../src/Entities/Customer.php';
// require __DIR__ . '/../src/Entities/Customer.php';
// require_once 'Src\Entities\Customer';
// require_once 'Src\Entities\Booking';

// $customer = new Customer();

// var_dump('begin dump');
// echo '<pre>';
// var_dump($customer);
// echo '</pre>';

// die();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Simple  App</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h1>Simple Database App</h1>

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

foreach ($results as $result):
    echo $result['booking_reference'].' - '.$result['customer_name'].$result['booking_date'];
endforeach;
?>

</body>
</html>