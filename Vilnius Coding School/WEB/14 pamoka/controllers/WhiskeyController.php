<?php
include "./models/Whiskey.php";

class WhiskeyController{
    public static function index()
    {
        $whiskies = Whiskey::all();
        return $whiskies;
    }

    public static function show()
    {
        $whiskey = Whiskey::find($_POST['id']);
        return $whiskey;
    }

     public static function store()
    {
        Whiskey::create();
    }

    public static function edit()
    {
        
    }

    public static function update()
    {
        $whiskey = new Whiskey();
        $whiskey->id = $_POST['id'];
        $whiskey->type = $_POST['type'];
        $whiskey->brand = $_POST['brand'];
        $whiskey->location = $_POST['location'];
        $whiskey->price = $_POST['price'];
        $whiskey->update();
    }

    public static function destroy()
    {
        Whiskey::destroy($_POST['id']);
    }
}




?>