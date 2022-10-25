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
        $whiskies = [];
        $db = new Database();
        $sql = "SELECT * FROM `whiskies`";
        $result = $db->conn->query($sql);
       
        while ($row = $result->fetch_assoc()) {
            $whiskies[] = new Whiskey ($row['id'], $row['type'], $row['brand'], $row['location'], $row['price']);
        }

        $db->conn->close();
        return $whiskies;
    }

    public static function create()
    {
        $db = new Database();
        $stmt = $db->conn->prepare("INSERT INTO `whiskies`(`type`, `brand`, `location`, `price`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $_POST['type'], $_POST['brand'], $_POST['location'], $_POST['price']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function find($id)
    {
        $whiskey = new Whiskey();
        $db = new Database();
        $sql = "SELECT * FROM `whiskies` WHERE `id` = ".$id;
        $result = $db->conn->query($sql);
       
        while ($row = $result->fetch_assoc()) {
            $whiskey = new Whiskey ($row['id'], $row['type'], $row['brand'], $row['location'], $row['price']);
        }

        $db->conn->close();
        return $whiskey;
    }

    public static function update()
    {
        $db = new Database();
        $stmt = $db->conn->prepare("UPDATE `whiskies` SET `type`=?,`brand`=?,`location`=?,`price`=? WHERE `id` =?");
        $stmt->bind_param("sssii", $_POST['type'], $_POST['brand'], $_POST['location'], $_POST['price'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy($id)
    {
        $db = new Database();
        $stmt = $db->conn->prepare("DELETE FROM `whiskies` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }
}




?>