<?php

namespace Autovista\Specification\EnumType;

/**
 * This class stands for ETGpackageFlagType EnumType
 * @subpackage Enumerations
 */
class ETGpackageFlagType
{
    /**
     * Constant for value 'PACKAGE'
     * @return string 'PACKAGE'
     */
    const VALUE_PACKAGE = 'PACKAGE';
    /**
     * Constant for value 'PACKAGE_ITEM'
     * @return string 'PACKAGE_ITEM'
     */
    const VALUE_PACKAGE_ITEM = 'PACKAGE_ITEM';
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
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_PACKAGE_ITEM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PACKAGE,
            self::VALUE_PACKAGE_ITEM,
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
