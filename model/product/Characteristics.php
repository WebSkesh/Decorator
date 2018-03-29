<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 28.03.2018
 * Time: 18:53
 */

namespace product;


class Characteristics
{
    private static $productId;
    private static $key;
    private static $value;

    public function __construct($productId, $key, $value)
    {
        self::$productId=$productId;
        self::$key=$key;
        self::$value=$value;
    }

    /**
     * @return mixed
     */
    public static function getProductId()
    {
        return self::$productId;
    }

    /**
     * @return mixed
     */
    public static function getValue()
    {
        return self::$value;
    }

    /**
     * @return mixed
     */
    public static function getKey()
    {
        return self::$key;
    }

    public static function getCharacteristics ($productId) {
        return array(
            "productId"=>self::$productId=$productId,
            "key"=>self::$key,
            "value"=>self::$value,
        );
    }

}