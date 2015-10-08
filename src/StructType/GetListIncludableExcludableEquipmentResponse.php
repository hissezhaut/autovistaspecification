<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListIncludableExcludableEquipmentResponse StructType
 * @subpackage Structs
 */
class GetListIncludableExcludableEquipmentResponse extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings provides ISOcountryCode, ISOlanguageCode and ISOcurrencyCode in order to configure the internal set of intelligence, data, and locality settings to perform the task.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Specification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: The target vehicle where the desired equipment is expected to be installed. The NationalVehicleCode and the RegistrationDate of the vehicle must be provided.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The DesiredEquipment
     * Meta informations extracted from the WSDL
     * - documentation: The equipment that user likes to fit to the vehicle.
     * @var \Autovista\Specification\StructType\EquipmentItemType
     */
    public $DesiredEquipment;
    /**
     * The IncludableEquipmentList
     * Meta informations extracted from the WSDL
     * - documentation: The list equipment the desired equipment required to be included.
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $IncludableEquipmentList;
    /**
     * The ExcludableEquipmentList
     * Meta informations extracted from the WSDL
     * - documentation: The list equipment the desired equipment required to be excluded from the pre-selected equipment list.
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $ExcludableEquipmentList;
    /**
     * The MutuallyExclusiveEquipmentGroup
     * Meta informations extracted from the WSDL
     * - documentation: This is a list of optional equipment which are mutually exclusive, i.e. a valid configuration is possible if and only if the configuration contains only one of the optional equipment. As a rule, client application displays these
     * equipment in a group where only one of the check-box/radio button is selectable.
     * - documentation: Mutually exclusive optional equipment hadling XML schema data type
     * @var \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType
     */
    public $MutuallyExclusiveEquipmentGroup;
    /**
     * Constructor method for GetListIncludableExcludableEquipmentResponse
     * @uses GetListIncludableExcludableEquipmentResponse::setSettings()
     * @uses GetListIncludableExcludableEquipmentResponse::setVehicle()
     * @uses GetListIncludableExcludableEquipmentResponse::setDesiredEquipment()
     * @uses GetListIncludableExcludableEquipmentResponse::setIncludableEquipmentList()
     * @uses GetListIncludableExcludableEquipmentResponse::setExcludableEquipmentList()
     * @uses
     * GetListIncludableExcludableEquipmentResponse::setMutuallyExclusiveEquipmentGroup
     * ()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @param \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $includableEquipmentList
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $excludableEquipmentList
     * @param \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType
     * $mutuallyExclusiveEquipmentGroup
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\VehicleType $vehicle = null, \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null, \Autovista\Specification\StructType\EquipmentListType $includableEquipmentList = null, \Autovista\Specification\StructType\EquipmentListType $excludableEquipmentList = null, \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType $mutuallyExclusiveEquipmentGroup = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle)
            ->setDesiredEquipment($desiredEquipment)
            ->setIncludableEquipmentList($includableEquipmentList)
            ->setExcludableEquipmentList($excludableEquipmentList)
            ->setMutuallyExclusiveEquipmentGroup($mutuallyExclusiveEquipmentGroup);
    }
    /**
     * Get Settings value
     * @return \Autovista\Specification\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setSettings(\Autovista\Specification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Autovista\Specification\StructType\VehicleType
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setVehicle(\Autovista\Specification\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get DesiredEquipment value
     * @return \Autovista\Specification\StructType\EquipmentItemType|null
     */
    public function getDesiredEquipment()
    {
        return $this->DesiredEquipment;
    }
    /**
     * Set DesiredEquipment value
     * @param \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setDesiredEquipment(\Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null)
    {
        $this->DesiredEquipment = $desiredEquipment;
        return $this;
    }
    /**
     * Get IncludableEquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType|null
     */
    public function getIncludableEquipmentList()
    {
        return $this->IncludableEquipmentList;
    }
    /**
     * Set IncludableEquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $includableEquipmentList
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setIncludableEquipmentList(\Autovista\Specification\StructType\EquipmentListType $includableEquipmentList = null)
    {
        $this->IncludableEquipmentList = $includableEquipmentList;
        return $this;
    }
    /**
     * Get ExcludableEquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType|null
     */
    public function getExcludableEquipmentList()
    {
        return $this->ExcludableEquipmentList;
    }
    /**
     * Set ExcludableEquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $excludableEquipmentList
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setExcludableEquipmentList(\Autovista\Specification\StructType\EquipmentListType $excludableEquipmentList = null)
    {
        $this->ExcludableEquipmentList = $excludableEquipmentList;
        return $this;
    }
    /**
     * Get MutuallyExclusiveEquipmentGroup value
     * @return
     * \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType|null
     */
    public function getMutuallyExclusiveEquipmentGroup()
    {
        return $this->MutuallyExclusiveEquipmentGroup;
    }
    /**
     * Set MutuallyExclusiveEquipmentGroup value
     * @param \Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType
     * $mutuallyExclusiveEquipmentGroup
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     */
    public function setMutuallyExclusiveEquipmentGroup(\Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType $mutuallyExclusiveEquipmentGroup = null)
    {
        $this->MutuallyExclusiveEquipmentGroup = $mutuallyExclusiveEquipmentGroup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
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
