<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedEquipmentListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: ExtendedEquipmentListType is introduced to include the ETG ESCO equipment groupping concepts. This XML schema complex data type may be replaced in future.
 * @subpackage Structs
 */
class ExtendedEquipmentListType extends AbstractStructBase
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
     * The Equipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public $Equipment;
    /**
     * Constructor method for ExtendedEquipmentListType
     * @uses ExtendedEquipmentListType::setNationalVehicleCode()
     * @uses ExtendedEquipmentListType::setRegistrationDate()
     * @uses ExtendedEquipmentListType::setEquipment()
     * @param long $nationalVehicleCode
     * @param \Autovista\Specification\StructType\ETGdateType $registrationDate
     * @param \Autovista\Specification\StructType\ExtendedEquipmentType $equipment
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Specification\StructType\ETGdateType $registrationDate = null, \Autovista\Specification\StructType\ExtendedEquipmentType $equipment = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setRegistrationDate($registrationDate)
            ->setEquipment($equipment);
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
     * @return \Autovista\Specification\StructType\ExtendedEquipmentListType
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
     * @return \Autovista\Specification\StructType\ExtendedEquipmentListType
     */
    public function setRegistrationDate(\Autovista\Specification\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get Equipment value
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Autovista\Specification\StructType\ExtendedEquipmentType $equipment
     * @return \Autovista\Specification\StructType\ExtendedEquipmentListType
     */
    public function setEquipment(\Autovista\Specification\StructType\ExtendedEquipmentType $equipment = null)
    {
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ExtendedEquipmentListType
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
