<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 14:08
 */

namespace service\additionalServices;
use service\ServiceDecorator;
use service\ServiceInterface;


class Insurance extends ServiceDecorator
{
    public function __construct(ServiceInterface $service)
    {
        parent::__construct($service);
        $this->doService();
    }

    public function doService() {
        echo "<br /> + Сервіс страхування товару <br />";
        $this->service->doService();
    }
}