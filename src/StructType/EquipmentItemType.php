<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentItemType StructType
 * @subpackage Structs
 */
class EquipmentItemType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Unique equipment code assigned by EurotaxGlass's during acquisition of data from primary sources. This code is used for evaluating residual value, forecasting residual value, etc.
     * @var int
     */
    public $Code;
    /**
     * The LongName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LongName;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShortName;
    /**
     * The SortCode
     * Meta informations extracted from the WSDL
     * - documentation: SortCode is deprecated and will be removed in future. It is highly recommended not to use this code for any purposes including sorting. If there is a list of equipment, the list is already sorted by the provider (for example,
     * vspecsrv sorts the list internally by SortCode).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SortCode;
    /**
     * The AdoptationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date when this item was adopted to this vehicle
     * - maxOccurs: 1
     * - minOccurs: 0
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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var short
     */
    public $GroupCode;
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - documentation: Factory fitted equipment, Optional equipment, etc
     * - maxOccurs: 1
     * - minOccurs: 0
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
     * The ManufacturerCode
     * Meta informations extracted from the WSDL
     * - documentation: Manufacturer code is used for reference only. It is not the primary identifier of an equipment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManufacturerCode;
    /**
     * Constructor method for EquipmentItemType
     * @uses EquipmentItemType::setCode()
     * @uses EquipmentItemType::setLongName()
     * @uses EquipmentItemType::setShortName()
     * @uses EquipmentItemType::setSortCode()
     * @uses EquipmentItemType::setAdoptationDate()
     * @uses EquipmentItemType::setNewPrice()
     * @uses EquipmentItemType::setGroupCode()
     * @uses EquipmentItemType::setEquipmentType()
     * @uses EquipmentItemType::setEquipmentPackageType()
     * @uses EquipmentItemType::setMerchantCode()
     * @uses EquipmentItemType::setManufacturerCode()
     * @param int $code
     * @param string $longName
     * @param string $shortName
     * @param int $sortCode
     * @param \Autovista\Specification\StructType\ETGdateType $adoptationDate
     * @param \Autovista\Specification\StructType\ETGpriceType $newPrice
     * @param short $groupCode
     * @param string $equipmentType
     * @param string $equipmentPackageType
     * @param int $merchantCode
     * @param string $manufacturerCode
     */
    public function __construct($code = null, $longName = null, $shortName = null, $sortCode = null, \Autovista\Specification\StructType\ETGdateType $adoptationDate = null, \Autovista\Specification\StructType\ETGpriceType $newPrice = null, $groupCode = null, $equipmentType = null, $equipmentPackageType = null, $merchantCode = 0, $manufacturerCode = null)
    {
        $this
            ->setCode($code)
            ->setLongName($longName)
            ->setShortName($shortName)
            ->setSortCode($sortCode)
            ->setAdoptationDate($adoptationDate)
            ->setNewPrice($newPrice)
            ->setGroupCode($groupCode)
            ->setEquipmentType($equipmentType)
            ->setEquipmentPackageType($equipmentPackageType)
            ->setMerchantCode($merchantCode)
            ->setManufacturerCode($manufacturerCode);
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function setShortName($shortName = null)
    {
        $this->ShortName = $shortName;
        return $this;
    }
    /**
     * Get SortCode value
     * @return int|null
     */
    public function getSortCode()
    {
        return $this->SortCode;
    }
    /**
     * Set SortCode value
     * @param int $sortCode
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function setSortCode($sortCode = null)
    {
        $this->SortCode = $sortCode;
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function setMerchantCode($merchantCode = 0)
    {
        $this->MerchantCode = $merchantCode;
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
     * @return \Autovista\Specification\StructType\EquipmentItemType
     */
    public function setManufacturerCode($manufacturerCode = null)
    {
        $this->ManufacturerCode = $manufacturerCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\EquipmentItemType
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
