<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 15:18
 */

namespace product;
use Shop\Shop;

class ProductActions extends Product
{
    public function addProduct($name, $category, $price, $amount)
    {
        $add = new Shop();
        $add->setProducts(
            array(
                "name"=>$name,
                "category"=>$category,
                "price"=>$price,
                "amount"=>$amount,
            )
        );
    }

    public function deleteProduct ($productId) {
        return true;
    }
}