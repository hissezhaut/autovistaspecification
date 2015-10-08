<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGhistoricalPriceType StructType
 * @subpackage Structs
 */
class ETGhistoricalPriceType extends AbstractStructBase
{
    /**
     * The ListPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var double
     */
    public $ListPrice;
    /**
     * The ISOcurrencyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ISOcurrencyCode;
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $ValidFrom;
    /**
     * The ValidTo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $ValidTo;
    /**
     * The DeliveryFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $DeliveryFee;
    /**
     * The RegistrationFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $RegistrationFee;
    /**
     * The RecyclingFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $RecyclingFee;
    /**
     * The ValueAddedTaxRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $ValueAddedTaxRate;
    /**
     * The LuxaryTaxRate
     * Meta informations extracted from the WSDL
     * - documentation: Deprecated as of 1.0.4. and replaced by LuxuryTaxRate
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $LuxaryTaxRate;
    /**
     * The RoadTaxRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $RoadTaxRate;
    /**
     * The DataSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DataSource;
    /**
     * The ListPriceIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If the element exists in an instance document, it must be either "0" (Listprice is without discount.) or "1" (ListPrice is including the discount.)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ListPriceIndicator;
    /**
     * The LuxuryTaxRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var double
     */
    public $LuxuryTaxRate;
    /**
     * Constructor method for ETGhistoricalPriceType
     * @uses ETGhistoricalPriceType::setListPrice()
     * @uses ETGhistoricalPriceType::setISOcurrencyCode()
     * @uses ETGhistoricalPriceType::setValidFrom()
     * @uses ETGhistoricalPriceType::setValidTo()
     * @uses ETGhistoricalPriceType::setDeliveryFee()
     * @uses ETGhistoricalPriceType::setRegistrationFee()
     * @uses ETGhistoricalPriceType::setRecyclingFee()
     * @uses ETGhistoricalPriceType::setValueAddedTaxRate()
     * @uses ETGhistoricalPriceType::setLuxaryTaxRate()
     * @uses ETGhistoricalPriceType::setRoadTaxRate()
     * @uses ETGhistoricalPriceType::setDataSource()
     * @uses ETGhistoricalPriceType::setListPriceIndicator()
     * @uses ETGhistoricalPriceType::setLuxuryTaxRate()
     * @param double $listPrice
     * @param string $iSOcurrencyCode
     * @param \Autovista\Specification\StructType\ETGdateType $validFrom
     * @param \Autovista\Specification\StructType\ETGdateType $validTo
     * @param double $deliveryFee
     * @param double $registrationFee
     * @param double $recyclingFee
     * @param double $valueAddedTaxRate
     * @param double $luxaryTaxRate
     * @param double $roadTaxRate
     * @param string $dataSource
     * @param string $listPriceIndicator
     * @param double $luxuryTaxRate
     */
    public function __construct($listPrice = null, $iSOcurrencyCode = null, \Autovista\Specification\StructType\ETGdateType $validFrom = null, \Autovista\Specification\StructType\ETGdateType $validTo = null, $deliveryFee = null, $registrationFee = null, $recyclingFee = null, $valueAddedTaxRate = null, $luxaryTaxRate = null, $roadTaxRate = null, $dataSource = null, $listPriceIndicator = null, $luxuryTaxRate = null)
    {
        $this
            ->setListPrice($listPrice)
            ->setISOcurrencyCode($iSOcurrencyCode)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo)
            ->setDeliveryFee($deliveryFee)
            ->setRegistrationFee($registrationFee)
            ->setRecyclingFee($recyclingFee)
            ->setValueAddedTaxRate($valueAddedTaxRate)
            ->setLuxaryTaxRate($luxaryTaxRate)
            ->setRoadTaxRate($roadTaxRate)
            ->setDataSource($dataSource)
            ->setListPriceIndicator($listPriceIndicator)
            ->setLuxuryTaxRate($luxuryTaxRate);
    }
    /**
     * Get ListPrice value
     * @return double
     */
    public function getListPrice()
    {
        return $this->ListPrice;
    }
    /**
     * Set ListPrice value
     * @param double $listPrice
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setListPrice($listPrice = null)
    {
        $this->ListPrice = $listPrice;
        return $this;
    }
    /**
     * Get ISOcurrencyCode value
     * @return string
     */
    public function getISOcurrencyCode()
    {
        return $this->ISOcurrencyCode;
    }
    /**
     * Set ISOcurrencyCode value
     * @uses \Autovista\Specification\EnumType\ISOcurrencyType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\ISOcurrencyType::getValidValues()
     * @param string $iSOcurrencyCode
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setISOcurrencyCode($iSOcurrencyCode = null)
    {
        if (!\Autovista\Specification\EnumType\ISOcurrencyType::valueIsValid($iSOcurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSOcurrencyCode, implode(', ', \Autovista\Specification\EnumType\ISOcurrencyType::getValidValues())), __LINE__);
        }
        $this->ISOcurrencyCode = $iSOcurrencyCode;
        return $this;
    }
    /**
     * Get ValidFrom value
     * @return \Autovista\Specification\StructType\ETGdateType
     */
    public function getValidFrom()
    {
        return $this->ValidFrom;
    }
    /**
     * Set ValidFrom value
     * @param \Autovista\Specification\StructType\ETGdateType $validFrom
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setValidFrom(\Autovista\Specification\StructType\ETGdateType $validFrom = null)
    {
        $this->ValidFrom = $validFrom;
        return $this;
    }
    /**
     * Get ValidTo value
     * @return \Autovista\Specification\StructType\ETGdateType|null
     */
    public function getValidTo()
    {
        return $this->ValidTo;
    }
    /**
     * Set ValidTo value
     * @param \Autovista\Specification\StructType\ETGdateType $validTo
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setValidTo(\Autovista\Specification\StructType\ETGdateType $validTo = null)
    {
        $this->ValidTo = $validTo;
        return $this;
    }
    /**
     * Get DeliveryFee value
     * @return double|null
     */
    public function getDeliveryFee()
    {
        return $this->DeliveryFee;
    }
    /**
     * Set DeliveryFee value
     * @param double $deliveryFee
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setDeliveryFee($deliveryFee = null)
    {
        $this->DeliveryFee = $deliveryFee;
        return $this;
    }
    /**
     * Get RegistrationFee value
     * @return double|null
     */
    public function getRegistrationFee()
    {
        return $this->RegistrationFee;
    }
    /**
     * Set RegistrationFee value
     * @param double $registrationFee
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setRegistrationFee($registrationFee = null)
    {
        $this->RegistrationFee = $registrationFee;
        return $this;
    }
    /**
     * Get RecyclingFee value
     * @return double|null
     */
    public function getRecyclingFee()
    {
        return $this->RecyclingFee;
    }
    /**
     * Set RecyclingFee value
     * @param double $recyclingFee
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setRecyclingFee($recyclingFee = null)
    {
        $this->RecyclingFee = $recyclingFee;
        return $this;
    }
    /**
     * Get ValueAddedTaxRate value
     * @return double|null
     */
    public function getValueAddedTaxRate()
    {
        return $this->ValueAddedTaxRate;
    }
    /**
     * Set ValueAddedTaxRate value
     * @param double $valueAddedTaxRate
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setValueAddedTaxRate($valueAddedTaxRate = null)
    {
        $this->ValueAddedTaxRate = $valueAddedTaxRate;
        return $this;
    }
    /**
     * Get LuxaryTaxRate value
     * @return double|null
     */
    public function getLuxaryTaxRate()
    {
        return $this->LuxaryTaxRate;
    }
    /**
     * Set LuxaryTaxRate value
     * @param double $luxaryTaxRate
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setLuxaryTaxRate($luxaryTaxRate = null)
    {
        $this->LuxaryTaxRate = $luxaryTaxRate;
        return $this;
    }
    /**
     * Get RoadTaxRate value
     * @return double|null
     */
    public function getRoadTaxRate()
    {
        return $this->RoadTaxRate;
    }
    /**
     * Set RoadTaxRate value
     * @param double $roadTaxRate
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setRoadTaxRate($roadTaxRate = null)
    {
        $this->RoadTaxRate = $roadTaxRate;
        return $this;
    }
    /**
     * Get DataSource value
     * @return string|null
     */
    public function getDataSource()
    {
        return $this->DataSource;
    }
    /**
     * Set DataSource value
     * @uses \Autovista\Specification\EnumType\ETGdataSourceType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\ETGdataSourceType::getValidValues()
     * @param string $dataSource
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setDataSource($dataSource = null)
    {
        if (!\Autovista\Specification\EnumType\ETGdataSourceType::valueIsValid($dataSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dataSource, implode(', ', \Autovista\Specification\EnumType\ETGdataSourceType::getValidValues())), __LINE__);
        }
        $this->DataSource = $dataSource;
        return $this;
    }
    /**
     * Get ListPriceIndicator value
     * @return string|null
     */
    public function getListPriceIndicator()
    {
        return $this->ListPriceIndicator;
    }
    /**
     * Set ListPriceIndicator value
     * @param string $listPriceIndicator
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setListPriceIndicator($listPriceIndicator = null)
    {
        $this->ListPriceIndicator = $listPriceIndicator;
        return $this;
    }
    /**
     * Get LuxuryTaxRate value
     * @return double|null
     */
    public function getLuxuryTaxRate()
    {
        return $this->LuxuryTaxRate;
    }
    /**
     * Set LuxuryTaxRate value
     * @param double $luxuryTaxRate
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public function setLuxuryTaxRate($luxuryTaxRate = null)
    {
        $this->LuxuryTaxRate = $luxuryTaxRate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType
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
