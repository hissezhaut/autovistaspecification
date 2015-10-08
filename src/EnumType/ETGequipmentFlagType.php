<?php

namespace Autovista\Specification\EnumType;

/**
 * This class stands for ETGequipmentFlagType EnumType
 * @subpackage Enumerations
 */
class ETGequipmentFlagType
{
    /**
     * Constant for value 'SERIAL'
     * @return string 'SERIAL'
     */
    const VALUE_SERIAL = 'SERIAL';
    /**
     * Constant for value 'OPTIONAL_FREE_OF_CHARGE'
     * @return string 'OPTIONAL_FREE_OF_CHARGE'
     */
    const VALUE_OPTIONAL_FREE_OF_CHARGE = 'OPTIONAL_FREE_OF_CHARGE';
    /**
     * Constant for value 'OPTIONAL_AT_EXTRA_CHARGE'
     * @return string 'OPTIONAL_AT_EXTRA_CHARGE'
     */
    const VALUE_OPTIONAL_AT_EXTRA_CHARGE = 'OPTIONAL_AT_EXTRA_CHARGE';
    /**
     * Constant for value 'OPTIONAL_INCLUDED_IN_QUOTATION'
     * @return string 'OPTIONAL_INCLUDED_IN_QUOTATION'
     */
    const VALUE_OPTIONAL_INCLUDED_IN_QUOTATION = 'OPTIONAL_INCLUDED_IN_QUOTATION';
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
     * @uses self::VALUE_SERIAL
     * @uses self::VALUE_OPTIONAL_FREE_OF_CHARGE
     * @uses self::VALUE_OPTIONAL_AT_EXTRA_CHARGE
     * @uses self::VALUE_OPTIONAL_INCLUDED_IN_QUOTATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SERIAL,
            self::VALUE_OPTIONAL_FREE_OF_CHARGE,
            self::VALUE_OPTIONAL_AT_EXTRA_CHARGE,
            self::VALUE_OPTIONAL_INCLUDED_IN_QUOTATION,
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
