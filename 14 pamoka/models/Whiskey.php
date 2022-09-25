<?php

use function PHPSTORM_META\type;

include "./models/Database.php";

class Whiskey {
    public $id;
    public $type;
    public $brand;
    public $location;
    public $price;


    function __construct($id = null, $type = null, $brand = null, $location = null, $price = null) {
        $this->id = $id;
        $this->type = $type;
        $this->brand = $brand;
        $this->location = $location;
        $this->price = $price;
    }

    public static function all()
    {
        $whiskey = [];
        $db = new Database();
        $sql = "SELECT * FROM `whiskey`";
        $result = $db->conn->query($sql);
       
        while ($row = $result->fetch_assoc()) {
            $whiskey[] = new Whiskey ($row['id'], $row['type'], $row['brand'], $row['location'], $row['price']);
        }

        $db->conn->close();
        return $whiskey;
    }

    public static function create()
    {
        $db = new Database();
        $stmt = $db->conn->prepare("INSERT INTO `whiskey`(`type`, `brand`, `location`, `price`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $_POST['type'], $_POST['brand'], $_POST['location'], $_POST['price']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }
}




?>