<?php

namespace Autovista\Specification\EnumType;

/**
 * This class stands for ETGimageFormatType EnumType
 * @subpackage Enumerations
 */
class ETGimageFormatType
{
    /**
     * Constant for value 'PORTRAIT'
     * @return string 'PORTRAIT'
     */
    const VALUE_PORTRAIT = 'PORTRAIT';
    /**
     * Constant for value 'LANDSCAPE'
     * @return string 'LANDSCAPE'
     */
    const VALUE_LANDSCAPE = 'LANDSCAPE';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PORTRAIT
     * @uses self::VALUE_LANDSCAPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PORTRAIT,
            self::VALUE_LANDSCAPE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
