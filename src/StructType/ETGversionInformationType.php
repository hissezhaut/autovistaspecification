<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGversionInformationType StructType
 * @subpackage Structs
 */
class ETGversionInformationType extends AbstractStructBase
{
    /**
     * The ServiceVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServiceVersion;
    /**
     * The IntelligenceVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $IntelligenceVersion;
    /**
     * The DataReleaseDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Common data type for date representation
     * @var \Autovista\Specification\StructType\ETGdateType
     */
    public $DataReleaseDate;
    /**
     * Constructor method for ETGversionInformationType
     * @uses ETGversionInformationType::setServiceVersion()
     * @uses ETGversionInformationType::setIntelligenceVersion()
     * @uses ETGversionInformationType::setDataReleaseDate()
     * @param string $serviceVersion
     * @param string $intelligenceVersion
     * @param \Autovista\Specification\StructType\ETGdateType $dataReleaseDate
     */
    public function __construct($serviceVersion = null, $intelligenceVersion = null, \Autovista\Specification\StructType\ETGdateType $dataReleaseDate = null)
    {
        $this
            ->setServiceVersion($serviceVersion)
            ->setIntelligenceVersion($intelligenceVersion)
            ->setDataReleaseDate($dataReleaseDate);
    }
    /**
     * Get ServiceVersion value
     * @return string
     */
    public function getServiceVersion()
    {
        return $this->ServiceVersion;
    }
    /**
     * Set ServiceVersion value
     * @param string $serviceVersion
     * @return \Autovista\Specification\StructType\ETGversionInformationType
     */
    public function setServiceVersion($serviceVersion = null)
    {
        $this->ServiceVersion = $serviceVersion;
        return $this;
    }
    /**
     * Get IntelligenceVersion value
     * @return string
     */
    public function getIntelligenceVersion()
    {
        return $this->IntelligenceVersion;
    }
    /**
     * Set IntelligenceVersion value
     * @param string $intelligenceVersion
     * @return \Autovista\Specification\StructType\ETGversionInformationType
     */
    public function setIntelligenceVersion($intelligenceVersion = null)
    {
        $this->IntelligenceVersion = $intelligenceVersion;
        return $this;
    }
    /**
     * Get DataReleaseDate value
     * @return \Autovista\Specification\StructType\ETGdateType
     */
    public function getDataReleaseDate()
    {
        return $this->DataReleaseDate;
    }
    /**
     * Set DataReleaseDate value
     * @param \Autovista\Specification\StructType\ETGdateType $dataReleaseDate
     * @return \Autovista\Specification\StructType\ETGversionInformationType
     */
    public function setDataReleaseDate(\Autovista\Specification\StructType\ETGdateType $dataReleaseDate = null)
    {
        $this->DataReleaseDate = $dataReleaseDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ETGversionInformationType
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
