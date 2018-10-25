<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

define('DB_PORT', 3306);

define('DS', DIRECTORY_SEPARATOR);
define('DIR_ROOT_FIS', dirname(__FILE__) . DS);
define('DIR_SRC', DIR_ROOT_FIS . 'src' . DS);
define('DIR_CLASS_MODEL', DIR_SRC . 'Entities' . DS);