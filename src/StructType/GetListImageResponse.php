<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListImageResponse StructType
 * @subpackage Structs
 */
class GetListImageResponse extends AbstractStructBase
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
     * The ImageList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\ImageListType
     */
    public $ImageList;
    /**
     * Constructor method for GetListImageResponse
     * @uses GetListImageResponse::setSettings()
     * @uses GetListImageResponse::setImageList()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\ImageListType $imageList
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\ImageListType $imageList = null)
    {
        $this
            ->setSettings($settings)
            ->setImageList($imageList);
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
     * @return \Autovista\Specification\StructType\GetListImageResponse
     */
    public function setSettings(\Autovista\Specification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get ImageList value
     * @return \Autovista\Specification\StructType\ImageListType
     */
    public function getImageList()
    {
        return $this->ImageList;
    }
    /**
     * Set ImageList value
     * @param \Autovista\Specification\StructType\ImageListType $imageList
     * @return \Autovista\Specification\StructType\GetListImageResponse
     */
    public function setImageList(\Autovista\Specification\StructType\ImageListType $imageList = null)
    {
        $this->ImageList = $imageList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\GetListImageResponse
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
