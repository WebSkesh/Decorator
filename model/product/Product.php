<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20.03.2018
 * Time: 17:29
 */

namespace product;

class Product
{
    private $name;
    private $category;
    private $price;
    private $amount;
    private $characteristics=array();

    public function __construct($productId, $name, $category, $price, $amount)
    {
        $this->name=$name;
        $this->category=$category;
        $this->price=$price;
        $this->amount=$amount;
        $this->characteristics=Characteristics::getCharacteristics($productId);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

}