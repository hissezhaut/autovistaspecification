<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGimageType StructType
 * @subpackage Structs
 */
class ETGimageType extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var unsignedInt
     */
    public $ID;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var anyURI
     */
    public $URL;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var unsignedInt
     */
    public $Height;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var unsignedInt
     */
    public $Width;
    /**
     * The Orientation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Orientation;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The SizeInKB
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedInt
     */
    public $SizeInKB;
    /**
     * The ViewCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedInt
     */
    public $ViewCode;
    /**
     * The ViewDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ViewDescription;
    /**
     * The ColorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedInt
     */
    public $ColorCode;
    /**
     * The ColorDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ColorDescription;
    /**
     * The BodyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var unsignedInt
     */
    public $BodyCode;
    /**
     * The BodyDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BodyDescription;
    /**
     * Constructor method for ETGimageType
     * @uses ETGimageType::setID()
     * @uses ETGimageType::setURL()
     * @uses ETGimageType::setHeight()
     * @uses ETGimageType::setWidth()
     * @uses ETGimageType::setOrientation()
     * @uses ETGimageType::setTitle()
     * @uses ETGimageType::setSizeInKB()
     * @uses ETGimageType::setViewCode()
     * @uses ETGimageType::setViewDescription()
     * @uses ETGimageType::setColorCode()
     * @uses ETGimageType::setColorDescription()
     * @uses ETGimageType::setBodyCode()
     * @uses ETGimageType::setBodyDescription()
     * @param unsignedInt $iD
     * @param anyURI $uRL
     * @param unsignedInt $height
     * @param unsignedInt $width
     * @param string $orientation
     * @param string $title
     * @param unsignedInt $sizeInKB
     * @param unsignedInt $viewCode
     * @param string $viewDescription
     * @param unsignedInt $colorCode
     * @param string $colorDescription
     * @param unsignedInt $bodyCode
     * @param string $bodyDescription
     */
    public function __construct($iD = null, $uRL = null, $height = null, $width = null, $orientation = null, $title = null, $sizeInKB = null, $viewCode = null, $viewDescription = null, $colorCode = null, $colorDescription = null, $bodyCode = null, $bodyDescription = null)
    {
        $this
            ->setID($iD)
            ->setURL($uRL)
            ->setHeight($height)
            ->setWidth($width)
            ->setOrientation($orientation)
            ->setTitle($title)
            ->setSizeInKB($sizeInKB)
            ->setViewCode($viewCode)
            ->setViewDescription($viewDescription)
            ->setColorCode($colorCode)
            ->setColorDescription($colorDescription)
            ->setBodyCode($bodyCode)
            ->setBodyDescription($bodyDescription);
    }
    /**
     * Get ID value
     * @return unsignedInt
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param unsignedInt $iD
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setID($iD = null)
    {
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get URL value
     * @return anyURI
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param anyURI $uRL
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setURL($uRL = null)
    {
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Height value
     * @return unsignedInt
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param unsignedInt $height
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setHeight($height = null)
    {
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return unsignedInt
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param unsignedInt $width
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setWidth($width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Orientation value
     * @return string
     */
    public function getOrientation()
    {
        return $this->Orientation;
    }
    /**
     * Set Orientation value
     * @uses \Autovista\Specification\EnumType\ETGimageFormatType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\ETGimageFormatType::getValidValues()
     * @param string $orientation
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setOrientation($orientation = null)
    {
        if (!\Autovista\Specification\EnumType\ETGimageFormatType::valueIsValid($orientation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $orientation, implode(', ', \Autovista\Specification\EnumType\ETGimageFormatType::getValidValues())), __LINE__);
        }
        $this->Orientation = $orientation;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setTitle($title = null)
    {
        $this->Title = $title;
        return $this;
    }
    /**
     * Get SizeInKB value
     * @return unsignedInt|null
     */
    public function getSizeInKB()
    {
        return $this->SizeInKB;
    }
    /**
     * Set SizeInKB value
     * @param unsignedInt $sizeInKB
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setSizeInKB($sizeInKB = null)
    {
        $this->SizeInKB = $sizeInKB;
        return $this;
    }
    /**
     * Get ViewCode value
     * @return unsignedInt|null
     */
    public function getViewCode()
    {
        return $this->ViewCode;
    }
    /**
     * Set ViewCode value
     * @param unsignedInt $viewCode
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setViewCode($viewCode = null)
    {
        $this->ViewCode = $viewCode;
        return $this;
    }
    /**
     * Get ViewDescription value
     * @return string|null
     */
    public function getViewDescription()
    {
        return $this->ViewDescription;
    }
    /**
     * Set ViewDescription value
     * @param string $viewDescription
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setViewDescription($viewDescription = null)
    {
        $this->ViewDescription = $viewDescription;
        return $this;
    }
    /**
     * Get ColorCode value
     * @return unsignedInt|null
     */
    public function getColorCode()
    {
        return $this->ColorCode;
    }
    /**
     * Set ColorCode value
     * @param unsignedInt $colorCode
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setColorCode($colorCode = null)
    {
        $this->ColorCode = $colorCode;
        return $this;
    }
    /**
     * Get ColorDescription value
     * @return string|null
     */
    public function getColorDescription()
    {
        return $this->ColorDescription;
    }
    /**
     * Set ColorDescription value
     * @param string $colorDescription
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setColorDescription($colorDescription = null)
    {
        $this->ColorDescription = $colorDescription;
        return $this;
    }
    /**
     * Get BodyCode value
     * @return unsignedInt|null
     */
    public function getBodyCode()
    {
        return $this->BodyCode;
    }
    /**
     * Set BodyCode value
     * @param unsignedInt $bodyCode
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setBodyCode($bodyCode = null)
    {
        $this->BodyCode = $bodyCode;
        return $this;
    }
    /**
     * Get BodyDescription value
     * @return string|null
     */
    public function getBodyDescription()
    {
        return $this->BodyDescription;
    }
    /**
     * Set BodyDescription value
     * @param string $bodyDescription
     * @return \Autovista\Specification\StructType\ETGimageType
     */
    public function setBodyDescription($bodyDescription = null)
    {
        $this->BodyDescription = $bodyDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ETGimageType
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
