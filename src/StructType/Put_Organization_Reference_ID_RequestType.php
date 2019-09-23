<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Organization_Reference_ID_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request for Put Organization Reference ID
 * @subpackage Structs
 */
class Put_Organization_Reference_ID_RequestType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Holds the Organization for which Organization Reference ID is going to be changed.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_Reference_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType
     */
    public $Organization_Reference_ID_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Organization_Reference_ID_RequestType
     * @uses Put_Organization_Reference_ID_RequestType::setOrganization_Reference()
     * @uses Put_Organization_Reference_ID_RequestType::setOrganization_Reference_ID_Data()
     * @uses Put_Organization_Reference_ID_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $organization_Reference_ID_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null, \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $organization_Reference_ID_Data = null, $version = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Reference_ID_Data($organization_Reference_ID_Data)
            ->setVersion($version);
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @return \WorkdayWsdl\\StructType\Put_Organization_Reference_ID_RequestType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Reference_ID_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType|null
     */
    public function getOrganization_Reference_ID_Data()
    {
        return $this->Organization_Reference_ID_Data;
    }
    /**
     * Set Organization_Reference_ID_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $organization_Reference_ID_Data
     * @return \WorkdayWsdl\\StructType\Put_Organization_Reference_ID_RequestType
     */
    public function setOrganization_Reference_ID_Data(\WorkdayWsdl\\StructType\Organization_Reference_ID_Reference_DataType $organization_Reference_ID_Data = null)
    {
        $this->Organization_Reference_ID_Data = $organization_Reference_ID_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Organization_Reference_ID_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Organization_Reference_ID_RequestType
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
