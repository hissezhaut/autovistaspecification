<?php

namespace Autovista\Specification\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\Specification\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\Specification\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'urn:com:eurotaxglass:spec', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetVersion $inputmsg
     * @return \Autovista\Specification\StructType\GetVersionResponse|bool
     */
    public function GetVersion(\Autovista\Specification\StructType\GetVersion $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListEquipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetListEquipment $inputmsg
     * @return \Autovista\Specification\StructType\GetListEquipmentResponse|bool
     */
    public function GetListEquipment(\Autovista\Specification\StructType\GetListEquipment $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListEquipment($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListEquipmentEx
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetListEquipmentEx $inputmsg
     * @return \Autovista\Specification\StructType\GetListEquipmentExResponse|bool
     */
    public function GetListEquipmentEx(\Autovista\Specification\StructType\GetListEquipmentEx $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListEquipmentEx($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListHistoricalPrice
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetListHistoricalPrice $inputmsg
     * @return \Autovista\Specification\StructType\GetListHistoricalPriceResponse|bool
     */
    public function GetListHistoricalPrice(\Autovista\Specification\StructType\GetListHistoricalPrice $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListHistoricalPrice($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackageContent
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetPackageContent $inputmsg
     * @return \Autovista\Specification\StructType\GetPackageContentResponse|bool
     */
    public function GetPackageContent(\Autovista\Specification\StructType\GetPackageContent $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetPackageContent($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListImage
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetListImage $inputmsg
     * @return \Autovista\Specification\StructType\GetListImageResponse|bool
     */
    public function GetListImage(\Autovista\Specification\StructType\GetListImage $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListImage($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetListIncludableExcludableEquipment
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: GetListIncludableExcludableEquipment returns a list of Includable or/and Excludable Equipment for an optional equipment or package configurable to a target vehicle based on a list of pre-selected optional equipment. If no such list
     * exists, GetListIncludableExcludableEquipment responses with an error in the form of a SOAP Fault. | This methods retrievs the list of includable and excludable equipment for a target vehicle based on the one or more pre-selected optional equipment.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Specification\StructType\GetListIncludableExcludableEquipment
     * $inputmsg
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse
     * |bool
     */
    public function GetListIncludableExcludableEquipment(\Autovista\Specification\StructType\GetListIncludableExcludableEquipment $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListIncludableExcludableEquipment($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetListIncludableExcludableEquipmentEx
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:spec
     * - SOAPHeaderTypes : \Autovista\Specification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: This is an alternative to the facility "GetListIncludableExcludableEquipment" that returns a list of Includable or/and Excludable Equipment together with propositional logic expression for an optional equipment or package
     * configurable to a target vehicle based on a list of pre-selected optional equipment. If there is no such list, GetListIncludableExcludableEquipment responses with an error message. | This is an alternative method to
     * "GetListIncludableExcludableEquipment".
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx
     * $inputmsg
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se|bool
     */
    public function GetListIncludableExcludableEquipmentEx(\Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListIncludableExcludableEquipmentEx($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return
     * \Autovista\Specification\StructType\GetListEquipmentExResponse|\Autovista\Specification\StructType\GetListEquipmentResponse|\Autovista\Specification\StructType\GetListHistoricalPriceResponse|\Autovista\Specification\StructType\GetListImageResponse|\A
     * utovista\Specification\StructType\GetListIncludableExcludableEquipmentExResponse|\Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse|\Autovista\Specification\StructType\GetPackageContentResponse|\Autovista\Specification\S
     * tructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
