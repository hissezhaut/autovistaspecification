<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistoricalPriceListType StructType
 * @subpackage Structs
 */
class HistoricalPriceListType extends AbstractStructBase
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
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $RegistrationDate;
    /**
     * The HistoricalPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ETGhistoricalPriceType
     */
    public $HistoricalPrice;
    /**
     * Constructor method for HistoricalPriceListType
     * @uses HistoricalPriceListType::setNationalVehicleCode()
     * @uses HistoricalPriceListType::setRegistrationDate()
     * @uses HistoricalPriceListType::setHistoricalPrice()
     * @param long $nationalVehicleCode
     * @param \Autovista\Specification\StructType\ETGdateType $registrationDate
     * @param \Autovista\Specification\StructType\ETGhistoricalPriceType
     * $historicalPrice
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Specification\StructType\ETGdateType $registrationDate = null, \Autovista\Specification\StructType\ETGhistoricalPriceType $historicalPrice = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setRegistrationDate($registrationDate)
            ->setHistoricalPrice($historicalPrice);
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
     * @return \Autovista\Specification\StructType\HistoricalPriceListType
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return \Autovista\Specification\StructType\ETGdateType|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param \Autovista\Specification\StructType\ETGdateType $registrationDate
     * @return \Autovista\Specification\StructType\HistoricalPriceListType
     */
    public function setRegistrationDate(\Autovista\Specification\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get HistoricalPrice value
     * @return \Autovista\Specification\StructType\ETGhistoricalPriceType|null
     */
    public function getHistoricalPrice()
    {
        return $this->HistoricalPrice;
    }
    /**
     * Set HistoricalPrice value
     * @param \Autovista\Specification\StructType\ETGhistoricalPriceType
     * $historicalPrice
     * @return \Autovista\Specification\StructType\HistoricalPriceListType
     */
    public function setHistoricalPrice(\Autovista\Specification\StructType\ETGhistoricalPriceType $historicalPrice = null)
    {
        $this->HistoricalPrice = $historicalPrice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\HistoricalPriceListType
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
