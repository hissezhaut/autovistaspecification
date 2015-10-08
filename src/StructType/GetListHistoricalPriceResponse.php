<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListHistoricalPriceResponse StructType
 * @subpackage Structs
 */
class GetListHistoricalPriceResponse extends AbstractStructBase
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
     * The HistoricalPriceList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\HistoricalPriceListType
     */
    public $HistoricalPriceList;
    /**
     * Constructor method for GetListHistoricalPriceResponse
     * @uses GetListHistoricalPriceResponse::setSettings()
     * @uses GetListHistoricalPriceResponse::setHistoricalPriceList()
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\HistoricalPriceListType
     * $historicalPriceList
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\HistoricalPriceListType $historicalPriceList = null)
    {
        $this
            ->setSettings($settings)
            ->setHistoricalPriceList($historicalPriceList);
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
     * @return \Autovista\Specification\StructType\GetListHistoricalPriceResponse
     */
    public function setSettings(\Autovista\Specification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get HistoricalPriceList value
     * @return \Autovista\Specification\StructType\HistoricalPriceListType
     */
    public function getHistoricalPriceList()
    {
        return $this->HistoricalPriceList;
    }
    /**
     * Set HistoricalPriceList value
     * @param \Autovista\Specification\StructType\HistoricalPriceListType
     * $historicalPriceList
     * @return \Autovista\Specification\StructType\GetListHistoricalPriceResponse
     */
    public function setHistoricalPriceList(\Autovista\Specification\StructType\HistoricalPriceListType $historicalPriceList = null)
    {
        $this->HistoricalPriceList = $historicalPriceList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\GetListHistoricalPriceResponse
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
