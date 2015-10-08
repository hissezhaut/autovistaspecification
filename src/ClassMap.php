<?php

namespace Autovista\Specification;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ETGpriceType' => 'Autovista\Specification\StructType\ETGpriceType',
            'ETGdateType' => 'Autovista\Specification\StructType\ETGdateType',
            'ETGsettingType' => 'Autovista\Specification\StructType\ETGsettingType',
            'CodeListType' => 'Autovista\Specification\StructType\CodeListType',
            'EquipmentItemType' => 'Autovista\Specification\StructType\EquipmentItemType',
            'ESACOdataType' => 'Autovista\Specification\StructType\ESACOdataType',
            'ExtendedEquipmentType' => 'Autovista\Specification\StructType\ExtendedEquipmentType',
            'ETGhistoricalPriceType' => 'Autovista\Specification\StructType\ETGhistoricalPriceType',
            'EquipmentListType' => 'Autovista\Specification\StructType\EquipmentListType',
            'HistoricalPriceListType' => 'Autovista\Specification\StructType\HistoricalPriceListType',
            'ETGimageType' => 'Autovista\Specification\StructType\ETGimageType',
            'ImageListType' => 'Autovista\Specification\StructType\ImageListType',
            'SpecificationType' => 'Autovista\Specification\StructType\SpecificationType',
            'LicenseType' => 'Autovista\Specification\StructType\LicenseType',
            'ClientAppType' => 'Autovista\Specification\StructType\ClientAppType',
            'LoginDataType' => 'Autovista\Specification\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\Specification\StructType\OriginatorType',
            'RequestType' => 'Autovista\Specification\StructType\RequestType',
            'FailureType' => 'Autovista\Specification\StructType\FailureType',
            'SuccessType' => 'Autovista\Specification\StructType\SuccessType',
            'ResponseType' => 'Autovista\Specification\StructType\ResponseType',
            'StatisticsType' => 'Autovista\Specification\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\Specification\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\Specification\StructType\ETGHeaderType',
            'VehicleType' => 'Autovista\Specification\StructType\VehicleType',
            'ETGversionInformationType' => 'Autovista\Specification\StructType\ETGversionInformationType',
            'ExtendedEquipmentListType' => 'Autovista\Specification\StructType\ExtendedEquipmentListType',
            'MutuallyExclusiveEquipmentGroupType' => 'Autovista\Specification\StructType\MutuallyExclusiveEquipmentGroupType',
            'PropositionalLogicExpressionType' => 'Autovista\Specification\StructType\PropositionalLogicExpressionType',
            'GetVersion' => 'Autovista\Specification\StructType\GetVersion',
            'GetVersionResponse' => 'Autovista\Specification\StructType\GetVersionResponse',
            'GetListEquipment' => 'Autovista\Specification\StructType\GetListEquipment',
            'GetListEquipmentResponse' => 'Autovista\Specification\StructType\GetListEquipmentResponse',
            'GetListEquipmentEx' => 'Autovista\Specification\StructType\GetListEquipmentEx',
            'GetListEquipmentExResponse' => 'Autovista\Specification\StructType\GetListEquipmentExResponse',
            'GetListHistoricalPrice' => 'Autovista\Specification\StructType\GetListHistoricalPrice',
            'GetListHistoricalPriceResponse' => 'Autovista\Specification\StructType\GetListHistoricalPriceResponse',
            'GetPackageContent' => 'Autovista\Specification\StructType\GetPackageContent',
            'GetPackageContentResponse' => 'Autovista\Specification\StructType\GetPackageContentResponse',
            'GetListImage' => 'Autovista\Specification\StructType\GetListImage',
            'GetListImageResponse' => 'Autovista\Specification\StructType\GetListImageResponse',
            'GetListIncludableExcludableEquipment' => 'Autovista\Specification\StructType\GetListIncludableExcludableEquipment',
            'GetListIncludableExcludableEquipmentResponse' => 'Autovista\Specification\StructType\GetListIncludableExcludableEquipmentResponse',
            'GetListIncludableExcludableEquipmentEx' => 'Autovista\Specification\StructType\GetListIncludableExcludableEquipmentEx',
            'GetListIncludableExcludableEquipmentExResponse' => 'Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExResponse',
        );
    }
}
