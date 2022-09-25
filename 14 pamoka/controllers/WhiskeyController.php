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