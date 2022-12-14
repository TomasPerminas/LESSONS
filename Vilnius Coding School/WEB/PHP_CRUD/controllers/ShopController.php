<?php
include "./models/Shop.php";

class ShopController{
    public static function index()
    {
        $shops = Shop::all();
        return $shops;
    }

    public static function show()
    {
        $shop = Shop::find($_POST['id']);
        return $shop;
    }

     public static function store()
    {
        Shop::create();
    }

    public static function edit()
    {
        
    }

    public static function update()
    {
        $shop = new Shop();
        $shop->id = $_POST['id'];
        $shop->name = $_POST['name'];
        $shop->sales_field = $_POST['sales_field'];
        $shop->accepts_cards = $_POST['accepts_cards'];
        $shop->items_quantity = $_POST['items_quantity'];
        $shop->update();
    }

    public static function destroy()
    {
        Shop::destroy($_POST['id']);
    }
}


?>