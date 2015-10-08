<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListIncludableExcludableEquipmentEx StructType
 * @subpackage Structs
 */
class GetListIncludableExcludableEquipmentEx extends AbstractStructBase
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
     * - documentation: The equipment that is expected to be installed in target vehicle.
     * @var \Autovista\Specification\StructType\EquipmentItemType
     */
    public $DesiredEquipment;
    /**
     * Constructor method for GetListIncludableExcludableEquipmentEx
     * @uses GetListIncludableExcludableEquipmentEx::setSettings()
     * @uses GetListIncludableExcludableEquipmentEx::setVehicle()
     * @uses GetListIncludableExcludableEquipmentEx::setDesiredEquipment()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @param \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\VehicleType $vehicle = null, \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle)
            ->setDesiredEquipment($desiredEquipment);
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
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx
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
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx
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
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx
     */
    public function setDesiredEquipment(\Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null)
    {
        $this->DesiredEquipment = $desiredEquipment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx
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
