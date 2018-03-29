<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 14:06
 */

namespace service\additionalServices;
use service\ServiceDecorator;

class Accessories extends ServiceDecorator
{
    public function doService() {
        echo "Сервіс придбання додаткових аксесуарів <br />";
        $this->service->doService();
    }
}