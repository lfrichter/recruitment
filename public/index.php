<?php
require '../start.php';
use Controllers\Customers;
use Controllers\Bookings;

$customers = Customers::get();

/**
 * Customer_id selected.
 */
$customer_id = isset($_GET['customerId']) ? $_GET['customerId'] : '';

/**
 * Customer data received.
 */
$first_name = 'Jim';
$second_name = 'Johnson';
$customer = Customers::firstOrCreate($first_name, $second_name);

header('Content-type: text/html; charset=utf-8');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Simple App</title>
    <link rel="stylesheet" href="/assets/bootstrap-4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <h1>Simple Database App</h1>

    <?php echo $customer->getFullName(); ?><br />

    <ul>
        <?php foreach ($customers as $key => $customer): ?>
        <li><a href="/?customerId=<?php echo $customer->id; ?>"><?php echo $customer->getFullName(); ?></a></li>    
        <?php endforeach; ?>
    </ul>
    <hr>
    <br />
    <h2>Customers</h2>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Second name</th>
                    <th class="text-center">Bookings</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers->sortBy('first_name') as $key => $customer) : ?>
                <tr>
                    <td><?php echo $customer->first_name; ?></td>
                    <td><?php echo $customer->second_name; ?></td>
                    <td class="text-center"><?php echo $customer->bookings->count(); ?></td>
                    <td class="text-center">
                        <?php if ($customer->bookings->count()): ?>
                        <a href="/?customerId=<?php echo $customer->id; ?>" class="btn-sm btn-primary">Bookings</a>
                        <?php endif; ?>
                    </td>
                </tr>  
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <hr>

    
    <?php
        if (!empty($customer_id)) {
            $bookings = Bookings::getByCustomerId($customer_id); ?>
        
        <h2>Bookings</h2>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Reference</th>
                        <th>Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $key => $booking) : ?>
                    <tr>
                        <td><?php echo $booking->booking_reference; ?></td>
                        <td><?php echo $booking->customer->getFullName(); ?></td>
                        <td><?php echo $booking->booking_date; ?></td>
                    </tr>  
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php
        } ?>
</div>

<script src="/assets/bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
<script src="/assets/bootstrap-4.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>