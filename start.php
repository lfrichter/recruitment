<?php
require 'config.php';

require 'vendor/autoload.php';

use Models\Database;

//Initialize Illuminate Database Connection
$database = new Database();
//phpinfo(); die();