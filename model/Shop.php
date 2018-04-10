<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 12:04
 */

namespace Shop;


class Shop
{
    private $name;
    private $address;
    public  $products=array();

    public function __construct($name, $address)
    {
        $this->name=$name;
        $this->address=$address;
    }

    public static function productList () {
        foreach ($this->products as $productId) {
            Display::Product();
        }
    }

    public function makeOrder () {
        return true;
    }


}