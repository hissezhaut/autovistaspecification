<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LicenseType StructType
 * @subpackage Structs
 */
class LicenseType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: License type (base, annual, transaction-based, etc.)
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique License ID
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * Constructor method for LicenseType
     * @uses LicenseType::setType()
     * @uses LicenseType::setID()
     * @param string $type
     * @param string $iD
     */
    public function __construct($type = null, $iD = null)
    {
        $this
            ->setType($type)
            ->setID($iD);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Autovista\Specification\StructType\LicenseType
     */
    public function setType($type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Autovista\Specification\StructType\LicenseType
     */
    public function setID($iD = null)
    {
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\LicenseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
