<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Sort_Order_Enabled_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Sort Order Enabled Web Service request element.
 * @subpackage Structs
 */
class Put_Sort_Order_Enabled_RequestType extends AbstractStructBase
{
    /**
     * The Sort_Order_Enabled_Data
     * Meta information extracted from the WSDL
     * - documentation: Element containing information about the Orderable Items and their order.
     * @var \StructType\Sort_Order_Enabled_Order_Data_ContainerType
     */
    public $Sort_Order_Enabled_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Sort_Order_Enabled_RequestType
     * @uses Put_Sort_Order_Enabled_RequestType::setSort_Order_Enabled_Data()
     * @uses Put_Sort_Order_Enabled_RequestType::setVersion()
     * @param \StructType\Sort_Order_Enabled_Order_Data_ContainerType $sort_Order_Enabled_Data
     * @param string $version
     */
    public function __construct(\StructType\Sort_Order_Enabled_Order_Data_ContainerType $sort_Order_Enabled_Data = null, $version = null)
    {
        $this
            ->setSort_Order_Enabled_Data($sort_Order_Enabled_Data)
            ->setVersion($version);
    }
    /**
     * Get Sort_Order_Enabled_Data value
     * @return \StructType\Sort_Order_Enabled_Order_Data_ContainerType|null
     */
    public function getSort_Order_Enabled_Data()
    {
        return $this->Sort_Order_Enabled_Data;
    }
    /**
     * Set Sort_Order_Enabled_Data value
     * @param \StructType\Sort_Order_Enabled_Order_Data_ContainerType $sort_Order_Enabled_Data
     * @return \StructType\Put_Sort_Order_Enabled_RequestType
     */
    public function setSort_Order_Enabled_Data(\StructType\Sort_Order_Enabled_Order_Data_ContainerType $sort_Order_Enabled_Data = null)
    {
        $this->Sort_Order_Enabled_Data = $sort_Order_Enabled_Data;
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
     * @return \StructType\Put_Sort_Order_Enabled_RequestType
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
     * @return \StructType\Put_Sort_Order_Enabled_RequestType
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
