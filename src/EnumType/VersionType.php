<?php

namespace Autovista\Specification\EnumType;

/**
 * This class stands for VersionType EnumType
 * @subpackage Enumerations
 */
class VersionType
{
    /**
     * Constant for value '2.0.0'
     * @return string '2.0.0'
     */
    const VALUE_2_0_0 = '2.0.0';
    /**
     * Constant for value '2.0.1'
     * @return string '2.0.1'
     */
    const VALUE_2_0_1 = '2.0.1';
    /**
     * Constant for value '2.1.0'
     * @return string '2.1.0'
     */
    const VALUE_2_1_0 = '2.1.0';
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
     * @uses self::VALUE_2_0_0
     * @uses self::VALUE_2_0_1
     * @uses self::VALUE_2_1_0
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_2_0_0,
            self::VALUE_2_0_1,
            self::VALUE_2_1_0,
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
