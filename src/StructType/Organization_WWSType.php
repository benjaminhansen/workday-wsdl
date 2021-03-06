<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Organization and its associated data.
 * @subpackage Structs
 */
class Organization_WWSType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier to reference an Organization. (Not the business based Organization ID.)
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Organization_WWS_DataType
     */
    public $Organization_Data;
    /**
     * Constructor method for Organization_WWSType
     * @uses Organization_WWSType::setOrganization_Reference()
     * @uses Organization_WWSType::setOrganization_Data()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_WWS_DataType $organization_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null, \WorkdayWsdl\\StructType\Organization_WWS_DataType $organization_Data = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Data($organization_Data);
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
     * @return \WorkdayWsdl\\StructType\Organization_WWSType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Data value
     * @return \WorkdayWsdl\\StructType\Organization_WWS_DataType|null
     */
    public function getOrganization_Data()
    {
        return $this->Organization_Data;
    }
    /**
     * Set Organization_Data value
     * @param \WorkdayWsdl\\StructType\Organization_WWS_DataType $organization_Data
     * @return \WorkdayWsdl\\StructType\Organization_WWSType
     */
    public function setOrganization_Data(\WorkdayWsdl\\StructType\Organization_WWS_DataType $organization_Data = null)
    {
        $this->Organization_Data = $organization_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_WWSType
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
