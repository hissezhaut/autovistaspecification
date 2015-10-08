<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageListType StructType
 * @subpackage Structs
 */
class ImageListType extends AbstractStructBase
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
     * The Image
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ETGimageType
     */
    public $Image;
    /**
     * Constructor method for ImageListType
     * @uses ImageListType::setNationalVehicleCode()
     * @uses ImageListType::setImage()
     * @param long $nationalVehicleCode
     * @param \Autovista\Specification\StructType\ETGimageType $image
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Specification\StructType\ETGimageType $image = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setImage($image);
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
     * @return \Autovista\Specification\StructType\ImageListType
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get Image value
     * @return \Autovista\Specification\StructType\ETGimageType|null
     */
    public function getImage()
    {
        return $this->Image;
    }
    /**
     * Set Image value
     * @param \Autovista\Specification\StructType\ETGimageType $image
     * @return \Autovista\Specification\StructType\ImageListType
     */
    public function setImage(\Autovista\Specification\StructType\ETGimageType $image = null)
    {
        $this->Image = $image;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ImageListType
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
