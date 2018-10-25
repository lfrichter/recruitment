<?php


class DbConn 
{
    private static $instance;
    private $dbConn;

    private function __construct()
    {
    }

    /**
     *
     * @return DbConn
     */
    private static function getInstance()
    {
        if (self::$instance == null) {
            $className = __class__;
            self::$instance = new $className;
        }

        return self::$instance;
    }

    /**
     *
     * @return DbConn
     */
    private static function initConnection()
    {
        $db = self::getInstance();

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $options = [
            PDO::ATTR_EMULATE_PREPARES => false, // turn off emulation mode for "real" prepared statements
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
        try {
            $db->dbConn = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (Exception $e) {
            error_log($e->getMessage());
            exit('Something weird happened'); //something a user can understand
        }
        return $db;
    }


    // private static function initConnection()
    // {
    //     $db = self::getInstance();
    //     $db->dbConn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    //     $db->dbConn->set_charset('utf8');
    //     return $db;
    // }

    /**
     * @return mysqli
     */
    public static function getDbConn()
    {
        try {
            $db = self::initConnection();
            return $db->dbConn;
        } catch (Exception $ex) {
            echo "I was unable to open a connection to the database. " . $ex->getMessage();
            return null;
        }
    }
}
