<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListIncludableExcludableEquipmentExResponse StructType
 * @subpackage Structs
 */
class GetListIncludableExcludableEquipmentExResponse extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - documentation: Settings provides ISOcountryCode, ISOlanguageCode and ISOcurrencyCode in order to configure the internal set of intelligence, data, and locality settings to perform the task.
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Specification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: The target vehicle where the desired equipment is expected to be installed. The NationalVehicleCode and the RegistrationDate of the vehicle must be provided.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Specification\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The DesiredEquipment
     * Meta informations extracted from the WSDL
     * - documentation: The equipment that user likes to fit to the vehicle.
     * @var \Autovista\Specification\StructType\EquipmentItemType
     */
    public $DesiredEquipment;
    /**
     * The IncludableEquipmentList
     * Meta informations extracted from the WSDL
     * - documentation: The list equipment the desired equipment required to be included.
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $IncludableEquipmentList;
    /**
     * The ExcludableEquipmentList
     * Meta informations extracted from the WSDL
     * - documentation: The list equipment the desired equipment required to be excluded from the pre-selected equipment list.
     * @var \Autovista\Specification\StructType\EquipmentListType
     */
    public $ExcludableEquipmentList;
    /**
     * The PropositionalLogicExpression
     * Meta informations extracted from the WSDL
     * - documentation: This element conatins a formula that must be evaluated to true if applied to the configuration of optional equipment valid for a vehicle
     * @var \Autovista\Specification\StructType\PropositionalLogicExpressionType
     */
    public $PropositionalLogicExpression;
    /**
     * Constructor method for GetListIncludableExcludableEquipmentExResponse
     * @uses GetListIncludableExcludableEquipmentExResponse::setSettings()
     * @uses GetListIncludableExcludableEquipmentExResponse::setVehicle()
     * @uses GetListIncludableExcludableEquipmentExResponse::setDesiredEquipment()
     * @uses
     * GetListIncludableExcludableEquipmentExResponse::setIncludableEquipmentList()
     * @uses
     * GetListIncludableExcludableEquipmentExResponse::setExcludableEquipmentList()
     * @uses
     * GetListIncludableExcludableEquipmentExResponse::setPropositionalLogicExpression(
     * )
     * @param \Autovista\Specification\StructType\ETGsettingType $settings
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @param \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $includableEquipmentList
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $excludableEquipmentList
     * @param \Autovista\Specification\StructType\PropositionalLogicExpressionType
     * $propositionalLogicExpression
     */
    public function __construct(\Autovista\Specification\StructType\ETGsettingType $settings = null, \Autovista\Specification\StructType\VehicleType $vehicle = null, \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null, \Autovista\Specification\StructType\EquipmentListType $includableEquipmentList = null, \Autovista\Specification\StructType\EquipmentListType $excludableEquipmentList = null, \Autovista\Specification\StructType\PropositionalLogicExpressionType $propositionalLogicExpression = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle)
            ->setDesiredEquipment($desiredEquipment)
            ->setIncludableEquipmentList($includableEquipmentList)
            ->setExcludableEquipmentList($excludableEquipmentList)
            ->setPropositionalLogicExpression($propositionalLogicExpression);
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
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setSettings(\Autovista\Specification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Autovista\Specification\StructType\VehicleType
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Autovista\Specification\StructType\VehicleType $vehicle
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setVehicle(\Autovista\Specification\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get DesiredEquipment value
     * @return \Autovista\Specification\StructType\EquipmentItemType|null
     */
    public function getDesiredEquipment()
    {
        return $this->DesiredEquipment;
    }
    /**
     * Set DesiredEquipment value
     * @param \Autovista\Specification\StructType\EquipmentItemType $desiredEquipment
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setDesiredEquipment(\Autovista\Specification\StructType\EquipmentItemType $desiredEquipment = null)
    {
        $this->DesiredEquipment = $desiredEquipment;
        return $this;
    }
    /**
     * Get IncludableEquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType|null
     */
    public function getIncludableEquipmentList()
    {
        return $this->IncludableEquipmentList;
    }
    /**
     * Set IncludableEquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $includableEquipmentList
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setIncludableEquipmentList(\Autovista\Specification\StructType\EquipmentListType $includableEquipmentList = null)
    {
        $this->IncludableEquipmentList = $includableEquipmentList;
        return $this;
    }
    /**
     * Get ExcludableEquipmentList value
     * @return \Autovista\Specification\StructType\EquipmentListType|null
     */
    public function getExcludableEquipmentList()
    {
        return $this->ExcludableEquipmentList;
    }
    /**
     * Set ExcludableEquipmentList value
     * @param \Autovista\Specification\StructType\EquipmentListType
     * $excludableEquipmentList
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setExcludableEquipmentList(\Autovista\Specification\StructType\EquipmentListType $excludableEquipmentList = null)
    {
        $this->ExcludableEquipmentList = $excludableEquipmentList;
        return $this;
    }
    /**
     * Get PropositionalLogicExpression value
     * @return
     * \Autovista\Specification\StructType\PropositionalLogicExpressionType|null
     */
    public function getPropositionalLogicExpression()
    {
        return $this->PropositionalLogicExpression;
    }
    /**
     * Set PropositionalLogicExpression value
     * @param \Autovista\Specification\StructType\PropositionalLogicExpressionType
     * $propositionalLogicExpression
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
     */
    public function setPropositionalLogicExpression(\Autovista\Specification\StructType\PropositionalLogicExpressionType $propositionalLogicExpression = null)
    {
        $this->PropositionalLogicExpression = $propositionalLogicExpression;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Autovista\Specification\StructType\GetListIncludableExcludableEquipmentExRespon
     * se
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
