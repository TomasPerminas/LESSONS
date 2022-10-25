<?php

class Database {
    public $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "alcohol_db";
        $this->conn = new mysqli($servername, $username, $password, $db);

    }
}

?>