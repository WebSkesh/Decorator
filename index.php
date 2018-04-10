<?php

require __DIR__."/vendor/autoload.php";

use service\Service;
use service\additionalServices\Accessories;
use service\additionalServices\Packing;
use service\additionalServices\Insurance;


# Оголошуємо якийсь базовий сервіс, для прикладу зворотній звязок
$service = new Service("Feedback", 0);
# Результат: Це якийсь основний сервіс: Feedback 0$


# Розширяємо основний сервіс, сервісом аксесуарів
$accessories = new Accessories($service);
# Результат: + Сервіс придбання додаткових аксесуарів


# Розширяємо основний сервіс, сервісом пакування
$packing = new Packing($service);
# Результат: + Сервіс пакування товару


# Розширяємо основний сервіс, сервісом страхування
$insurance = new Insurance($service);
# Результат: + Сервіс страхування товару
