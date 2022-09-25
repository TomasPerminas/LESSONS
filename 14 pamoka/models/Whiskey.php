<?php
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
}




?>