<?php

namespace Autovista\Specification\EnumType;

/**
 * This class stands for ETGdataSourceType EnumType
 * @subpackage Enumerations
 */
class ETGdataSourceType
{
    /**
     * Constant for value 'OFFICIAL'
     * @return string 'OFFICIAL'
     */
    const VALUE_OFFICIAL = 'OFFICIAL';
    /**
     * Constant for value 'PROVISIONAL'
     * @return string 'PROVISIONAL'
     */
    const VALUE_PROVISIONAL = 'PROVISIONAL';
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
     * @uses self::VALUE_OFFICIAL
     * @uses self::VALUE_PROVISIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OFFICIAL,
            self::VALUE_PROVISIONAL,
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
