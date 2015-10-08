<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListEquipmentExResponse StructType
 * @subpackage Structs
 */
class GetListEquipmentExResponse extends AbstractStructBase
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
     * The ExtendedEquipmentList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: ExtendedEquipmentListType is introduced to include the ETG ESCO equipment groupping concepts. This XML schema complex data type may be replaced in future.
     * @var \Autovista\Specification\StructType\ExtendedEquipmentListType
     */
    public $ExtendedEquipmentList;
    /**
     * Constructor method for GetListEquipmentExResponse
     * @uses GetListEquipmentExResponse::setSettings()
     * @uses GetListEquipmentExResponse::setExtendedEquipmentList()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\ExtendedEquipmentListType
     * $extendedEquipmentList
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\ExtendedEquipmentListType $extendedEquipmentList = null)
    {
        $this
            ->setSettings($settings)
            ->setExtendedEquipmentList($extendedEquipmentList);
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
     * @return \Autovista\Specification\StructType\GetListEquipmentExResponse
     */
    public function setSettings(\Autovista\Specification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get ExtendedEquipmentList value
     * @return \Autovista\Specification\StructType\ExtendedEquipmentListType
     */
    public function getExtendedEquipmentList()
    {
        return $this->ExtendedEquipmentList;
    }
    /**
     * Set ExtendedEquipmentList value
     * @param \Autovista\Specification\StructType\ExtendedEquipmentListType
     * $extendedEquipmentList
     * @return \Autovista\Specification\StructType\GetListEquipmentExResponse
     */
    public function setExtendedEquipmentList(\Autovista\Specification\StructType\ExtendedEquipmentListType $extendedEquipmentList = null)
    {
        $this->ExtendedEquipmentList = $extendedEquipmentList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\GetListEquipmentExResponse
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
