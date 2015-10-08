<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MutuallyExclusiveEquipmentGroupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mutually exclusive optional equipment hadling XML schema data type
 * @subpackage Structs
 */
class MutuallyExclusiveEquipmentGroupType extends AbstractStructBase
{
    /**
     * The MutuallyExcludableEquipmentList
     * Meta informations extracted from the WSDL
     * - documentation: This is a list of optional equipment which are mutually exclusive, i.e. a valid configuration is possible if and only if the configuration contains only one of the optional equipment. As a rule, client application displays these
     * equipment in a group where only one of the check-box/radio button is selectable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $MutuallyExcludableEquipmentList;
    /**
     * Constructor method for MutuallyExclusiveEquipmentGroupType
     * @uses MutuallyExclusiveEquipmentGroupType::setMutuallyExcludableEquipmentList()
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $mutuallyExcludableEquipmentList
     */
    public function __construct(\Autovista\Specification\StructType\EquipmentListType $mutuallyExcludableEquipmentList = null)
    {
        $this
            ->setMutuallyExcludableEquipmentList($mutuallyExcludableEquipmentList);
    }
    /**
     * Get MutuallyExcludableEquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType|null
     */
    public function getMutuallyExcludableEquipmentList()
    {
        return $this->MutuallyExcludableEquipmentList;
    }
    /**
     * Set MutuallyExcludableEquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $mutuallyExcludableEquipmentList
     * @return \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType
     */
    public function setMutuallyExcludableEquipmentList(\Autovista\Specification\StructType\EquipmentListType $mutuallyExcludableEquipmentList = null)
    {
        $this->MutuallyExcludableEquipmentList = $mutuallyExcludableEquipmentList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType
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
