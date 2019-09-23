<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Structure_DissolveType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only a Top Level Organization can be dissolved. | Utilize the following elements to Dissolve an existing Organization Structure within the Workday system.
 * @subpackage Structs
 */
class Organization_Structure_DissolveType extends AbstractStructBase
{
    /**
     * The Organization_Reference_Data
     * @var \WorkdayWsdl\\StructType\Organization_ReferenceType
     */
    public $Organization_Reference_Data;
    /**
     * The Organization_Structure_Dissolve_Data
     * @var \WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType
     */
    public $Organization_Structure_Dissolve_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Organization_Structure_DissolveType
     * @uses Organization_Structure_DissolveType::setOrganization_Reference_Data()
     * @uses Organization_Structure_DissolveType::setOrganization_Structure_Dissolve_Data()
     * @uses Organization_Structure_DissolveType::setVersion()
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data
     * @param \WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType $organization_Structure_Dissolve_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data = null, \WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType $organization_Structure_Dissolve_Data = null, $version = null)
    {
        $this
            ->setOrganization_Reference_Data($organization_Reference_Data)
            ->setOrganization_Structure_Dissolve_Data($organization_Structure_Dissolve_Data)
            ->setVersion($version);
    }
    /**
     * Get Organization_Reference_Data value
     * @return \WorkdayWsdl\\StructType\Organization_ReferenceType|null
     */
    public function getOrganization_Reference_Data()
    {
        return $this->Organization_Reference_Data;
    }
    /**
     * Set Organization_Reference_Data value
     * @param \WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data
     * @return \WorkdayWsdl\\StructType\Organization_Structure_DissolveType
     */
    public function setOrganization_Reference_Data(\WorkdayWsdl\\StructType\Organization_ReferenceType $organization_Reference_Data = null)
    {
        $this->Organization_Reference_Data = $organization_Reference_Data;
        return $this;
    }
    /**
     * Get Organization_Structure_Dissolve_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType|null
     */
    public function getOrganization_Structure_Dissolve_Data()
    {
        return $this->Organization_Structure_Dissolve_Data;
    }
    /**
     * Set Organization_Structure_Dissolve_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType $organization_Structure_Dissolve_Data
     * @return \WorkdayWsdl\\StructType\Organization_Structure_DissolveType
     */
    public function setOrganization_Structure_Dissolve_Data(\WorkdayWsdl\\StructType\Organization_Structure_Dissolve_DataType $organization_Structure_Dissolve_Data = null)
    {
        $this->Organization_Structure_Dissolve_Data = $organization_Structure_Dissolve_Data;
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
     * @return \WorkdayWsdl\\StructType\Organization_Structure_DissolveType
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
     * @return \WorkdayWsdl\\StructType\Organization_Structure_DissolveType
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
