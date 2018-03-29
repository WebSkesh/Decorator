<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 14:08
 */

namespace service\additionalServices;
use service\ServiceDecorator;


class Insurance extends ServiceDecorator
{
    public function doService() {
        echo "Сервіс страхування товару <br />";
        $this->service->doService();
    }
}