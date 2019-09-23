<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Organization_Assignment_Restrictions_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Organization Assignment Restrictions Request
 * @subpackage Structs
 */
class Put_Organization_Assignment_Restrictions_RequestType extends AbstractStructBase
{
    /**
     * The Organization_Assignment_Restrictions_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType
     */
    public $Organization_Assignment_Restrictions_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Organization_Assignment_Restrictions_RequestType
     * @uses Put_Organization_Assignment_Restrictions_RequestType::setOrganization_Assignment_Restrictions_Data()
     * @uses Put_Organization_Assignment_Restrictions_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data = null, $version = null)
    {
        $this
            ->setOrganization_Assignment_Restrictions_Data($organization_Assignment_Restrictions_Data)
            ->setVersion($version);
    }
    /**
     * Get Organization_Assignment_Restrictions_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType|null
     */
    public function getOrganization_Assignment_Restrictions_Data()
    {
        return $this->Organization_Assignment_Restrictions_Data;
    }
    /**
     * Set Organization_Assignment_Restrictions_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data
     * @return \WorkdayWsdl\\StructType\Put_Organization_Assignment_Restrictions_RequestType
     */
    public function setOrganization_Assignment_Restrictions_Data(\WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_DataType $organization_Assignment_Restrictions_Data = null)
    {
        $this->Organization_Assignment_Restrictions_Data = $organization_Assignment_Restrictions_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Organization_Assignment_Restrictions_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Organization_Assignment_Restrictions_RequestType
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
