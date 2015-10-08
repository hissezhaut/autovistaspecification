<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropositionalLogicExpressionType StructType
 * @subpackage Structs
 */
class PropositionalLogicExpressionType extends AbstractStructBase
{
    /**
     * The Expression
     * Meta informations extracted from the WSDL
     * - documentation: This is a propositional logic expression that contains operators:AND, XOR (exclusive or), one or more Equipment Code as operand
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Expression;
    /**
     * The AllowedValue
     * Meta informations extracted from the WSDL
     * - default: true
     * @var boolean
     */
    public $AllowedValue;
    /**
     * Constructor method for PropositionalLogicExpressionType
     * @uses PropositionalLogicExpressionType::setExpression()
     * @uses PropositionalLogicExpressionType::setAllowedValue()
     * @param string $expression
     * @param boolean $allowedValue
     */
    public function __construct($expression = null, $allowedValue = true)
    {
        $this
            ->setExpression($expression)
            ->setAllowedValue($allowedValue);
    }
    /**
     * Get Expression value
     * @return string
     */
    public function getExpression()
    {
        return $this->Expression;
    }
    /**
     * Set Expression value
     * @param string $expression
     * @return \Autovista\Specification\StructType\PropositionalLogicExpressionType
     */
    public function setExpression($expression = null)
    {
        $this->Expression = $expression;
        return $this;
    }
    /**
     * Get AllowedValue value
     * @return boolean|null
     */
    public function getAllowedValue()
    {
        return $this->AllowedValue;
    }
    /**
     * Set AllowedValue value
     * @param boolean $allowedValue
     * @return \Autovista\Specification\StructType\PropositionalLogicExpressionType
     */
    public function setAllowedValue($allowedValue = true)
    {
        $this->AllowedValue = $allowedValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\PropositionalLogicExpressionType
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
