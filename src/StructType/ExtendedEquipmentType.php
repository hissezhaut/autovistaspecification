<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedEquipmentType StructType
 * @subpackage Structs
 */
class ExtendedEquipmentType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Unique equipment code assigned by EurotaxGlass's during acquisition of data from primary sources. This code is used for evaluating residual value, forecasting residual value, etc.
     * @var int
     */
    public $Code;
    /**
     * The ManufacturerCode
     * Meta informations extracted from the WSDL
     * - documentation: Manufacturer code is used for reference only. It is not the primary identifier of an equipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManufacturerCode;
    /**
     * The LongName
     * @var string
     */
    public $LongName;
    /**
     * The ShortName
     * @var string
     */
    public $ShortName;
    /**
     * The AdoptationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date when this item was adopted to this vehicle
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $AdoptationDate;
    /**
     * The NewPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ETGpriceType
     */
    public $NewPrice;
    /**
     * The GroupCode
     * @var short
     */
    public $GroupCode;
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - documentation: Factory fitted equipment, Optional equipment, etc
     * @var string
     */
    public $EquipmentType;
    /**
     * The EquipmentPackageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EquipmentPackageType;
    /**
     * The MerchantCode
     * Meta informations extracted from the WSDL
     * - default: 0
     * - documentation: This element is known as market code or devaluation code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MerchantCode;
    /**
     * The ESACOdata
     * Meta informations extracted from the WSDL
     * - documentation: ESACOdata provides information about EurotaxGlass's equipment grouping information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ESACOdataType
     */
    public $ESACOdata;
    /**
     * Constructor method for ExtendedEquipmentType
     * @uses ExtendedEquipmentType::setCode()
     * @uses ExtendedEquipmentType::setManufacturerCode()
     * @uses ExtendedEquipmentType::setLongName()
     * @uses ExtendedEquipmentType::setShortName()
     * @uses ExtendedEquipmentType::setAdoptationDate()
     * @uses ExtendedEquipmentType::setNewPrice()
     * @uses ExtendedEquipmentType::setGroupCode()
     * @uses ExtendedEquipmentType::setEquipmentType()
     * @uses ExtendedEquipmentType::setEquipmentPackageType()
     * @uses ExtendedEquipmentType::setMerchantCode()
     * @uses ExtendedEquipmentType::setESACOdata()
     * @param int $code
     * @param string $manufacturerCode
     * @param string $longName
     * @param string $shortName
     * @param \Autovista\Specification\StructType\ETGdateType $adoptationDate
     * @param \Autovista\Specification\StructType\ETGpriceType $newPrice
     * @param short $groupCode
     * @param string $equipmentType
     * @param string $equipmentPackageType
     * @param int $merchantCode
     * @param \Autovista\Specification\StructType\ESACOdataType $eSACOdata
     */
    public function __construct($code = null, $manufacturerCode = null, $longName = null, $shortName = null, \Autovista\Specification\StructType\ETGdateType $adoptationDate = null, \Autovista\Specification\StructType\ETGpriceType $newPrice = null, $groupCode = null, $equipmentType = null, $equipmentPackageType = null, $merchantCode = 0, \Autovista\Specification\StructType\ESACOdataType $eSACOdata = null)
    {
        $this
            ->setCode($code)
            ->setManufacturerCode($manufacturerCode)
            ->setLongName($longName)
            ->setShortName($shortName)
            ->setAdoptationDate($adoptationDate)
            ->setNewPrice($newPrice)
            ->setGroupCode($groupCode)
            ->setEquipmentType($equipmentType)
            ->setEquipmentPackageType($equipmentPackageType)
            ->setMerchantCode($merchantCode)
            ->setESACOdata($eSACOdata);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get ManufacturerCode value
     * @return string|null
     */
    public function getManufacturerCode()
    {
        return $this->ManufacturerCode;
    }
    /**
     * Set ManufacturerCode value
     * @param string $manufacturerCode
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setManufacturerCode($manufacturerCode = null)
    {
        $this->ManufacturerCode = $manufacturerCode;
        return $this;
    }
    /**
     * Get LongName value
     * @return string|null
     */
    public function getLongName()
    {
        return $this->LongName;
    }
    /**
     * Set LongName value
     * @param string $longName
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setLongName($longName = null)
    {
        $this->LongName = $longName;
        return $this;
    }
    /**
     * Get ShortName value
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }
    /**
     * Set ShortName value
     * @param string $shortName
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setShortName($shortName = null)
    {
        $this->ShortName = $shortName;
        return $this;
    }
    /**
     * Get AdoptationDate value
     * @return \Autovista\Specification\StructType\ETGdateType|null
     */
    public function getAdoptationDate()
    {
        return $this->AdoptationDate;
    }
    /**
     * Set AdoptationDate value
     * @param \Autovista\Specification\StructType\ETGdateType $adoptationDate
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setAdoptationDate(\Autovista\Specification\StructType\ETGdateType $adoptationDate = null)
    {
        $this->AdoptationDate = $adoptationDate;
        return $this;
    }
    /**
     * Get NewPrice value
     * @return \Autovista\Specification\StructType\ETGpriceType|null
     */
    public function getNewPrice()
    {
        return $this->NewPrice;
    }
    /**
     * Set NewPrice value
     * @param \Autovista\Specification\StructType\ETGpriceType $newPrice
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setNewPrice(\Autovista\Specification\StructType\ETGpriceType $newPrice = null)
    {
        $this->NewPrice = $newPrice;
        return $this;
    }
    /**
     * Get GroupCode value
     * @return short|null
     */
    public function getGroupCode()
    {
        return $this->GroupCode;
    }
    /**
     * Set GroupCode value
     * @param short $groupCode
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setGroupCode($groupCode = null)
    {
        $this->GroupCode = $groupCode;
        return $this;
    }
    /**
     * Get EquipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->EquipmentType;
    }
    /**
     * Set EquipmentType value
     * @uses \Autovista\Specification\EnumType\ETGequipmentFlagType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\ETGequipmentFlagType::getValidValues()
     * @param string $equipmentType
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setEquipmentType($equipmentType = null)
    {
        if (!\Autovista\Specification\EnumType\ETGequipmentFlagType::valueIsValid($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $equipmentType, implode(', ', \Autovista\Specification\EnumType\ETGequipmentFlagType::getValidValues())), __LINE__);
        }
        $this->EquipmentType = $equipmentType;
        return $this;
    }
    /**
     * Get EquipmentPackageType value
     * @return string|null
     */
    public function getEquipmentPackageType()
    {
        return $this->EquipmentPackageType;
    }
    /**
     * Set EquipmentPackageType value
     * @uses \Autovista\Specification\EnumType\ETGpackageFlagType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\ETGpackageFlagType::getValidValues()
     * @param string $equipmentPackageType
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setEquipmentPackageType($equipmentPackageType = null)
    {
        if (!\Autovista\Specification\EnumType\ETGpackageFlagType::valueIsValid($equipmentPackageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $equipmentPackageType, implode(', ', \Autovista\Specification\EnumType\ETGpackageFlagType::getValidValues())), __LINE__);
        }
        $this->EquipmentPackageType = $equipmentPackageType;
        return $this;
    }
    /**
     * Get MerchantCode value
     * @return int|null
     */
    public function getMerchantCode()
    {
        return $this->MerchantCode;
    }
    /**
     * Set MerchantCode value
     * @param int $merchantCode
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setMerchantCode($merchantCode = 0)
    {
        $this->MerchantCode = $merchantCode;
        return $this;
    }
    /**
     * Get ESACOdata value
     * @return \Autovista\Specification\StructType\ESACOdataType|null
     */
    public function getESACOdata()
    {
        return $this->ESACOdata;
    }
    /**
     * Set ESACOdata value
     * @param \Autovista\Specification\StructType\ESACOdataType $eSACOdata
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
     */
    public function setESACOdata(\Autovista\Specification\StructType\ESACOdataType $eSACOdata = null)
    {
        $this->ESACOdata = $eSACOdata;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ExtendedEquipmentType
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
