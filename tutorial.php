<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/specification-v2.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/specification-v2.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Autovista\Specification\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \Autovista\Specification\ServiceType\Get($options);
$get->setSoapHeaderETGHeader($ETGHeader);
/**
 * Sample call for GetVersion operation/method
 */
if ($get->GetVersion(new \Autovista\Specification\StructType\GetVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListEquipment operation/method
 */
if ($get->GetListEquipment(new \Autovista\Specification\StructType\GetListEquipment()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListEquipmentEx operation/method
 */
if ($get->GetListEquipmentEx(new \Autovista\Specification\StructType\GetListEquipmentEx()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListHistoricalPrice operation/method
 */
if ($get->GetListHistoricalPrice(new \Autovista\Specification\StructType\GetListHistoricalPrice()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPackageContent operation/method
 */
if ($get->GetPackageContent(new \Autovista\Specification\StructType\GetPackageContent()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListImage operation/method
 */
if ($get->GetListImage(new \Autovista\Specification\StructType\GetListImage()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListIncludableExcludableEquipment operation/method
 */
if ($get->GetListIncludableExcludableEquipment(new \Autovista\Specification\StructType\GetListIncludableExcludableEquipment()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListIncludableExcludableEquipmentEx operation/method
 */
if ($get->GetListIncludableExcludableEquipmentEx(new \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
