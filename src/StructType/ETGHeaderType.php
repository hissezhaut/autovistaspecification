<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGHeaderType StructType
 * @subpackage Structs
 */
class ETGHeaderType extends AbstractStructBase
{
    /**
     * The VersionRequest
     * @var string
     */
    public $VersionRequest;
    /**
     * The Originator
     * @var \Autovista\Specification\StructType\OriginatorType
     */
    public $Originator;
    /**
     * The Response
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Autovista\Specification\StructType\ResponseType
     */
    public $Response;
    /**
     * Constructor method for ETGHeaderType
     * @uses ETGHeaderType::setVersionRequest()
     * @uses ETGHeaderType::setOriginator()
     * @uses ETGHeaderType::setResponse()
     * @param string $versionRequest
     * @param \Autovista\Specification\StructType\OriginatorType $originator
     * @param \Autovista\Specification\StructType\ResponseType $response
     */
    public function __construct($versionRequest = null, \Autovista\Specification\StructType\OriginatorType $originator = null, \Autovista\Specification\StructType\ResponseType $response = null)
    {
        $this
            ->setVersionRequest($versionRequest)
            ->setOriginator($originator)
            ->setResponse($response);
    }
    /**
     * Get VersionRequest value
     * @return string|null
     */
    public function getVersionRequest()
    {
        return $this->VersionRequest;
    }
    /**
     * Set VersionRequest value
     * @uses \Autovista\Specification\EnumType\VersionType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\VersionType::getValidValues()
     * @param string $versionRequest
     * @return \Autovista\Specification\StructType\ETGHeaderType
     */
    public function setVersionRequest($versionRequest = null)
    {
        if (!\Autovista\Specification\EnumType\VersionType::valueIsValid($versionRequest)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $versionRequest, implode(', ', \Autovista\Specification\EnumType\VersionType::getValidValues())), __LINE__);
        }
        $this->VersionRequest = $versionRequest;
        return $this;
    }
    /**
     * Get Originator value
     * @return \Autovista\Specification\StructType\OriginatorType|null
     */
    public function getOriginator()
    {
        return $this->Originator;
    }
    /**
     * Set Originator value
     * @param \Autovista\Specification\StructType\OriginatorType $originator
     * @return \Autovista\Specification\StructType\ETGHeaderType
     */
    public function setOriginator(\Autovista\Specification\StructType\OriginatorType $originator = null)
    {
        $this->Originator = $originator;
        return $this;
    }
    /**
     * Get Response value
     * @return \Autovista\Specification\StructType\ResponseType|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param \Autovista\Specification\StructType\ResponseType $response
     * @return \Autovista\Specification\StructType\ETGHeaderType
     */
    public function setResponse(\Autovista\Specification\StructType\ResponseType $response = null)
    {
        $this->Response = $response;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ETGHeaderType
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
