<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestType StructType
 * @subpackage Structs
 */
class RequestType extends AbstractStructBase
{
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique signature defining a service to be invoked
     * @var string
     */
    public $Signature;
    /**
     * The ClientOrderID
     * Meta informations extracted from the WSDL
     * - documentation: An ID provided by the client. Has to be unique for each request within the same client activity. The request can be referenced by this ID in case of claim.
     * - minOccurs: 0
     * @var string
     */
    public $ClientOrderID;
    /**
     * The ServiceAccessCode
     * Meta informations extracted from the WSDL
     * - documentation: Optional internal service specific access code. Can be set on preprocessing to pass specific access information to the ultimate service. Should NOT be filled by a client, otherwise ignored and overwritten. To be basically removed
     * from the final response before sending it back to a client.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceAccessCode;
    /**
     * Constructor method for RequestType
     * @uses RequestType::setSignature()
     * @uses RequestType::setClientOrderID()
     * @uses RequestType::setServiceAccessCode()
     * @param string $signature
     * @param string $clientOrderID
     * @param string $serviceAccessCode
     */
    public function __construct($signature = null, $clientOrderID = null, $serviceAccessCode = null)
    {
        $this
            ->setSignature($signature)
            ->setClientOrderID($clientOrderID)
            ->setServiceAccessCode($serviceAccessCode);
    }
    /**
     * Get Signature value
     * @return string|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param string $signature
     * @return \Autovista\Specification\StructType\RequestType
     */
    public function setSignature($signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get ClientOrderID value
     * @return string|null
     */
    public function getClientOrderID()
    {
        return $this->ClientOrderID;
    }
    /**
     * Set ClientOrderID value
     * @param string $clientOrderID
     * @return \Autovista\Specification\StructType\RequestType
     */
    public function setClientOrderID($clientOrderID = null)
    {
        $this->ClientOrderID = $clientOrderID;
        return $this;
    }
    /**
     * Get ServiceAccessCode value
     * @return string|null
     */
    public function getServiceAccessCode()
    {
        return $this->ServiceAccessCode;
    }
    /**
     * Set ServiceAccessCode value
     * @param string $serviceAccessCode
     * @return \Autovista\Specification\StructType\RequestType
     */
    public function setServiceAccessCode($serviceAccessCode = null)
    {
        $this->ServiceAccessCode = $serviceAccessCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\RequestType
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
