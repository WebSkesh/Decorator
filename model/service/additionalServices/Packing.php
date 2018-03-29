<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 13:56
 */

namespace service\additionalServices;
use service\ServiceDecorator;

class Packing extends ServiceDecorator
{
    public function doService() {
        echo "Сервіс пакування товару <br />";
        $this->service->doService();
    }
}