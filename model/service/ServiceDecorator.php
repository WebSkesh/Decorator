<?php
/*
 * Це наш основний клас декоратора,
 * який містить посилання на основний клас сервісу,
 * і змінює його поведінку в разі необхідності.
 *
 * Тут ми визначили один абстрактний метод doService,
 * який буде реалізований у дочірніх класах, і саме він
 * буде змінювати поведінку основного класу.
 *
 */

namespace service;

abstract class ServiceDecorator implements ServiceInterface
{
    protected $service;

    public function __construct(ServiceInterface $service) {
        $this->service = $service;
    }

    abstract public function doService();
}