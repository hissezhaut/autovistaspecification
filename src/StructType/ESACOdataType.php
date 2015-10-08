<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ESACOdataType StructType
 * @subpackage Structs
 */
class ESACOdataType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Code;
    /**
     * The MainGroupCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MainGroupCode;
    /**
     * The SubGroupCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SubGroupCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The MainGroupDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MainGroupDescription;
    /**
     * The SubGroupDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SubGroupDescription;
    /**
     * Constructor method for ESACOdataType
     * @uses ESACOdataType::setCode()
     * @uses ESACOdataType::setMainGroupCode()
     * @uses ESACOdataType::setSubGroupCode()
     * @uses ESACOdataType::setDescription()
     * @uses ESACOdataType::setMainGroupDescription()
     * @uses ESACOdataType::setSubGroupDescription()
     * @param int $code
     * @param int $mainGroupCode
     * @param int $subGroupCode
     * @param string $description
     * @param string $mainGroupDescription
     * @param string $subGroupDescription
     */
    public function __construct($code = null, $mainGroupCode = null, $subGroupCode = null, $description = null, $mainGroupDescription = null, $subGroupDescription = null)
    {
        $this
            ->setCode($code)
            ->setMainGroupCode($mainGroupCode)
            ->setSubGroupCode($subGroupCode)
            ->setDescription($description)
            ->setMainGroupDescription($mainGroupDescription)
            ->setSubGroupDescription($subGroupDescription);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get MainGroupCode value
     * @return int
     */
    public function getMainGroupCode()
    {
        return $this->MainGroupCode;
    }
    /**
     * Set MainGroupCode value
     * @param int $mainGroupCode
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setMainGroupCode($mainGroupCode = null)
    {
        $this->MainGroupCode = $mainGroupCode;
        return $this;
    }
    /**
     * Get SubGroupCode value
     * @return int
     */
    public function getSubGroupCode()
    {
        return $this->SubGroupCode;
    }
    /**
     * Set SubGroupCode value
     * @param int $subGroupCode
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setSubGroupCode($subGroupCode = null)
    {
        $this->SubGroupCode = $subGroupCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get MainGroupDescription value
     * @return string|null
     */
    public function getMainGroupDescription()
    {
        return $this->MainGroupDescription;
    }
    /**
     * Set MainGroupDescription value
     * @param string $mainGroupDescription
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setMainGroupDescription($mainGroupDescription = null)
    {
        $this->MainGroupDescription = $mainGroupDescription;
        return $this;
    }
    /**
     * Get SubGroupDescription value
     * @return string|null
     */
    public function getSubGroupDescription()
    {
        return $this->SubGroupDescription;
    }
    /**
     * Set SubGroupDescription value
     * @param string $subGroupDescription
     * @return \Autovista\Specification\StructType\ESACOdataType
     */
    public function setSubGroupDescription($subGroupDescription = null)
    {
        $this->SubGroupDescription = $subGroupDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ESACOdataType
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
