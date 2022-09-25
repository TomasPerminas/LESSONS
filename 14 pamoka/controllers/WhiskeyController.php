<?php
include "./models/Whiskey.php";

class WhiskeyController{
    public static function index()
    {
        $whiskey = Whiskey::all();
        return $whiskey;
    }

    public static function show()
    {
        
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
        
    }

    public static function destroy()
    {
        
    }
}




?>