<?php

namespace Autovista\Specification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientAppType StructType
 * @subpackage Structs
 */
class ClientAppType extends AbstractStructBase
{
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - documentation: ETG-wide unique Product signature
     * - minOccurs: 0
     * @var string
     */
    public $Product;
    /**
     * The Module
     * Meta informations extracted from the WSDL
     * - documentation: Product-wide unique Module signature
     * - minOccurs: 0
     * @var string
     */
    public $Module;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Product version
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * Constructor method for ClientAppType
     * @uses ClientAppType::setProduct()
     * @uses ClientAppType::setModule()
     * @uses ClientAppType::setVersion()
     * @param string $product
     * @param string $module
     * @param string $version
     */
    public function __construct($product = null, $module = null, $version = null)
    {
        $this
            ->setProduct($product)
            ->setModule($module)
            ->setVersion($version);
    }
    /**
     * Get Product value
     * @return string|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param string $product
     * @return \Autovista\Specification\StructType\ClientAppType
     */
    public function setProduct($product = null)
    {
        $this->Product = $product;
        return $this;
    }
    /**
     * Get Module value
     * @return string|null
     */
    public function getModule()
    {
        return $this->Module;
    }
    /**
     * Set Module value
     * @param string $module
     * @return \Autovista\Specification\StructType\ClientAppType
     */
    public function setModule($module = null)
    {
        $this->Module = $module;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @uses \Autovista\Specification\EnumType\VersionType::valueIsValid()
     * @uses \Autovista\Specification\EnumType\VersionType::getValidValues()
     * @param string $version
     * @return \Autovista\Specification\StructType\ClientAppType
     */
    public function setVersion($version = null)
    {
        if (!\Autovista\Specification\EnumType\VersionType::valueIsValid($version)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $version, implode(', ', \Autovista\Specification\EnumType\VersionType::getValidValues())), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Specification\StructType\ClientAppType
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
