<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 14:06
 */

namespace service\additionalServices;
use service\ServiceDecorator;
use service\ServiceInterface;

class Accessories extends ServiceDecorator
{
    public function __construct(ServiceInterface $service)
    {
        parent::__construct($service);
        $this->doService();
    }

    public function doService() {
        echo "<br /> + Сервіс придбання додаткових аксесуарів <br />";
        $this->service->doService();
    }
}