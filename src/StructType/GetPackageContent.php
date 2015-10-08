<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageContent StructType
 * @subpackage Structs
 */
class GetPackageContent extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Specification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The PackageInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\EquipmentItemType
     */
    public $PackageInformation;
    /**
     * Constructor method for GetPackageContent
     * @uses GetPackageContent::setSettings()
     * @uses GetPackageContent::setVehicle()
     * @uses GetPackageContent::setPackageInformation()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @param \Autovista\Specification\StructType\EquipmentItemType $packageInformation
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\VehicleType $vehicle = null, \Autovista\Specification\StructType\EquipmentItemType $packageInformation = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle)
            ->setPackageInformation($packageInformation);
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
     * @return \Autovista\Specification\StructType\GetPackageContent
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
     * @return \Autovista\Specification\StructType\GetPackageContent
     */
    public function setVehicle(\Autovista\Specification\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get PackageInformation value
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function getPackageInformation()
    {
        return $this->PackageInformation;
    }
    /**
     * Set PackageInformation value
     * @param \Autovista\Specification\StructType\EquipmentItemType $packageInformation
     * @return \Autovista\Specification\StructType\GetPackageContent
     */
    public function setPackageInformation(\Autovista\Specification\StructType\EquipmentItemType $packageInformation = null)
    {
        $this->PackageInformation = $packageInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\GetPackageContent
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
