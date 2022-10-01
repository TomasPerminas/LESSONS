<?php
include "./models/Database.php";

class Shop {
    public $id;
    public $name;
    public $sales_field;
    public $accepts_cards;
    public $items_quantity;


    function __construct($id = null, $name = null, $sales_field = null, $accepts_cards = null, $items_quantity = null) {
        $this->id = $id;
        $this->name = $name;
        $this->sales_field = $sales_field;
        $this->accepts_cards = $accepts_cards;
        $this->items_quantity = $items_quantity;
    }

    public static function all()
    {
        $shops = [];
        $db = new Database();
        $sql = "SELECT * FROM `shops`";
        $result = $db->conn->query($sql);
       
        while ($row = $result->fetch_assoc()) {
            $shops[] = new Shop ($row['id'], $row['name'], $row['sales_field'], $row['accepts_cards'], $row['items_quantity']);
        }

        $db->conn->close();
        return $shops;
    }

    public static function create()
    {
        $db = new Database();
        $stmt = $db->conn->prepare("INSERT INTO `shops`(`name`, `sales_field`, `accepts_cards`, `items_quantity`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $_POST['name'], $_POST['sales_field'], $_POST['accepts_cards'], $_POST['items_quantity']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function find($id)
    {
        $shop = new Shop();
        $db = new Database();
        $sql = "SELECT * FROM `shops` WHERE `id` = ".$id;
        $result = $db->conn->query($sql);
       
        while ($row = $result->fetch_assoc()) {
            $shop = new Shop ($row['id'], $row['name'], $row['sales_field'], $row['accepts_cards'], $row['items_quantity']);
        }

        $db->conn->close();
        return $shop;
    }

    public static function update()
    {
        $db = new Database();
        $stmt = $db->conn->prepare("UPDATE `shops` SET `name`=?,`sales_field`=?,`accepts_cards`=?,`items_quantity`=? WHERE `id` =?");
        $stmt->bind_param("ssbii", $_POST['name'], $_POST['sales_field'], $_POST['accepts_cards'], $_POST['items_quantity'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy($id)
    {
        $db = new Database();
        $stmt = $db->conn->prepare("DELETE FROM `shops` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }
}




?>