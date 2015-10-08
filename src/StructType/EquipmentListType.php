<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentListType StructType
 * @subpackage Structs
 */
class EquipmentListType extends AbstractStructBase
{
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\EquipmentItemType
     */
    public $Equipment;
    /**
     * Constructor method for EquipmentListType
     * @uses EquipmentListType::setEquipment()
     * @param \Autovista\Specification\StructType\EquipmentItemType $equipment
     */
    public function __construct(\Autovista\Specification\StructType\EquipmentItemType $equipment = null)
    {
        $this
            ->setEquipment($equipment);
    }
    /**
     * Get Equipment value
     * @return \Autovista\Specification\StructType\EquipmentItemType|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param \Autovista\Specification\StructType\EquipmentItemType $equipment
     * @return \Autovista\Specification\StructType\EquipmentListType
     */
    public function setEquipment(\Autovista\Specification\StructType\EquipmentItemType $equipment = null)
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
     * @return \Autovista\Specification\StructType\EquipmentListType
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
