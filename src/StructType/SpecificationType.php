<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecificationType StructType
 * @subpackage Structs
 */
class SpecificationType extends AbstractStructBase
{
    /**
     * The NationalVehicleCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $RegistrationDate;
    /**
     * The EquipmentList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $EquipmentList;
    /**
     * Constructor method for SpecificationType
     * @uses SpecificationType::setNationalVehicleCode()
     * @uses SpecificationType::setRegistrationDate()
     * @uses SpecificationType::setEquipmentList()
     * @param long $nationalVehicleCode
     * @param \Autovista\Specification\StructType\ETGdateType $registrationDate
     * @param \Autovista\Specification\StructType\EquipmentListType $equipmentList
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Specification\StructType\ETGdateType $registrationDate = null, \Autovista\Specification\StructType\EquipmentListType $equipmentList = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setRegistrationDate($registrationDate)
            ->setEquipmentList($equipmentList);
    }
    /**
     * Get NationalVehicleCode value
     * @return long
     */
    public function getNationalVehicleCode()
    {
        return $this->NationalVehicleCode;
    }
    /**
     * Set NationalVehicleCode value
     * @param long $nationalVehicleCode
     * @return \Autovista\Specification\StructType\SpecificationType
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return \Autovista\Specification\StructType\ETGdateType
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param \Autovista\Specification\StructType\ETGdateType $registrationDate
     * @return \Autovista\Specification\StructType\SpecificationType
     */
    public function setRegistrationDate(\Autovista\Specification\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get EquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType
     */
    public function getEquipmentList()
    {
        return $this->EquipmentList;
    }
    /**
     * Set EquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType $equipmentList
     * @return \Autovista\Specification\StructType\SpecificationType
     */
    public function setEquipmentList(\Autovista\Specification\StructType\EquipmentListType $equipmentList = null)
    {
        $this->EquipmentList = $equipmentList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\SpecificationType
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
