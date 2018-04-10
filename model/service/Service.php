<?php
/*
 * Це основний клас,
 * який генерує якийсь стандартний сервіс
 * скажем доставкі
 */

namespace service;

class Service implements ServiceInterface
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
        $this->doService();
    }

    public function getService()
    {
        return array(
            $this->name,
            $this->price,
        );
    }

    public function doService() {
        echo "<br /> Це якийсь основний сервіс: ".$this->name." ".$this->price."$";
    }
}