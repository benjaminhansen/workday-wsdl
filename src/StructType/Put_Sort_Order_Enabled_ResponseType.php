<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Sort_Order_Enabled_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Sort Order Enabled Web Service Response.
 * @subpackage Structs
 */
class Put_Sort_Order_Enabled_ResponseType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled_Reference
     * Meta information extracted from the WSDL
     * - documentation: Sort Order Enabled instance reference.
     * - minOccurs: 0
     * @var \StructType\Sort_Order_EnabledObjectType
     */
    public $Sort_Order_Enabled_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Sort_Order_Enabled_ResponseType
     * @uses Put_Sort_Order_Enabled_ResponseType::setSort_Order_Enabled_Reference()
     * @uses Put_Sort_Order_Enabled_ResponseType::setVersion()
     * @param \StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference
     * @param string $version
     */
    public function __construct(\StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference = null, $version = null)
    {
        $this
            ->setSort_Order_Enabled_Reference($sort_Order_Enabled_Reference)
            ->setVersion($version);
    }
    /**
     * Get Sort_Order_Enabled_Reference value
     * @return \StructType\Sort_Order_EnabledObjectType|null
     */
    public function getSort_Order_Enabled_Reference()
    {
        return $this->Sort_Order_Enabled_Reference;
    }
    /**
     * Set Sort_Order_Enabled_Reference value
     * @param \StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference
     * @return \StructType\Put_Sort_Order_Enabled_ResponseType
     */
    public function setSort_Order_Enabled_Reference(\StructType\Sort_Order_EnabledObjectType $sort_Order_Enabled_Reference = null)
    {
        $this->Sort_Order_Enabled_Reference = $sort_Order_Enabled_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Sort_Order_Enabled_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Sort_Order_Enabled_ResponseType
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
