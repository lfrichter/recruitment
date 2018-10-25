<?php

// namespace Src\Entities;

class Customer
{
    public $title;
    public $firstName;
    public $last_name;
    public $address;

    // public function __construct(){
    // }

    // public function __set($nome, $valor)
    // {
    //     if (property_exists(get_class($this), $nome))
    //         $this->$nome = $valor;
    // }

    // public function __get($nome)
    // {
    //     if (property_exists(get_class($this), $nome))
    //         return $this->$nome;
    // }

    
    public function saveCustomer()
    {
        $pdo  = DbConn::getDbConn();

        // echo '<pre>';
        // var_dump($pdo); 
        // echo '</pre>';
        
        
        $pdo->beginTransaction(); // also helps speed up your inserts.
        // $sql = "INSERT INTO customers (first_name, second_name) VALUES ('". $this->firstName ."', '". $this->last_name ."')";

        // if ($db->query($sql) === true) {
        //     echo "<pre>New customer created successfully.</pre>";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $db->error;
        // }

        // $db->close();
        $sql = "INSERT INTO customers (first_name, second_name)  VALUES (?,?) ";
        $stmt = $pdo->prepare ($sql);
        try {
            echo $stmt->execute([$this->firstName, $this->last_name]);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        // $pdo->commit();

        
        // $stmt = $pdo->prepare("INSERT INTO customers (first_name, second_name) VALUES (?,?)");
        // $stmt->execute([$this->firstName, $this->last_name]);
        // $stmt = null;

        // $query = "INSERT INTO customers (first_name, second_name) VALUES (?,?)";
        // $stmt = $db->prepare($query);
        // $stmt->bind_param('ss', $this->firstName, $this->last_name);
        // $stmt->execute();

        die();
    }

    // public function get_our_customers_by_surname()
    // {
    //     $db = new \mysqli(DB_NAME, DB_USER, DB_PASS, DB_PORT);
    //     $res = $db->query('SELECT * FROM customers ORDER BY second_name');

    //     return $res->fetch_assoc();
    // }

    // public function formatNames($firstName, $surname)
    // {
    //     return $firstName.' '.$surname;
    // }

    // public function findById(string $id)
    // {
    //     $db = new \mysqli('127.0.0.1', DB_USER, DB_PASS, DB_PORT);
    //     $res = $db->query('SELECT * FROM customers WHERE id = \''.$id.'\'');
    //     mysqli_close($db);

    //     return $res;
    // }

    // /**
    //  * Get all the customers from the database and output them.
    //  */
    // public function getAllCustomers()
    // {
    //     $db = new \mysqli('127.0.0.1', DB_USER, DB_PASS, DB_PORT);

    //     $res = $db->query('SELECT * FROM customers');
    //     echo '<table>';
    //     while ($result = $res->fetch_assoc()) {
    //         echo '<TR>';
    //         echo '<TD>'.$result['first_name'].'</ td>';
    //         echo '<td>'.$result['second_name'].'</ TD>';
    //         echo '</tr>';
    //     }

    //     echo '</table>';
    // }
}
