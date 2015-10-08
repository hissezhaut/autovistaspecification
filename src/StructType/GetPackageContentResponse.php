<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageContentResponse StructType
 * @subpackage Structs
 */
class GetPackageContentResponse extends AbstractStructBase
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
     * The PackageContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $PackageContent;
    /**
     * Constructor method for GetPackageContentResponse
     * @uses GetPackageContentResponse::setSettings()
     * @uses GetPackageContentResponse::setVehicle()
     * @uses GetPackageContentResponse::setPackageInformation()
     * @uses GetPackageContentResponse::setPackageContent()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @param \Autovista\Specification\StructType\EquipmentItemType $packageInformation
     * @param \Autovista\Specification\StructType\EquipmentListType $packageContent
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\VehicleType $vehicle = null, \Autovista\Specification\StructType\EquipmentItemType $packageInformation = null, \Autovista\Specification\StructType\EquipmentListType $packageContent = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle)
            ->setPackageInformation($packageInformation)
            ->setPackageContent($packageContent);
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
     * @return \Autovista\Specification\StructType\GetPackageContentResponse
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
     * @return \Autovista\Specification\StructType\GetPackageContentResponse
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
     * @return \Autovista\Specification\StructType\GetPackageContentResponse
     */
    public function setPackageInformation(\Autovista\Specification\StructType\EquipmentItemType $packageInformation = null)
    {
        $this->PackageInformation = $packageInformation;
        return $this;
    }
    /**
     * Get PackageContent value
     * @return \Autovista\Specification\StructType\EquipmentListType
     */
    public function getPackageContent()
    {
        return $this->PackageContent;
    }
    /**
     * Set PackageContent value
     * @param \Autovista\Specification\StructType\EquipmentListType $packageContent
     * @return \Autovista\Specification\StructType\GetPackageContentResponse
     */
    public function setPackageContent(\Autovista\Specification\StructType\EquipmentListType $packageContent = null)
    {
        $this->PackageContent = $packageContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\GetPackageContentResponse
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
