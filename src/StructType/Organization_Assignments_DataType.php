<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Assignments_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the default organization assignments for this organization.
 * @subpackage Structs
 */
class Organization_Assignments_DataType extends AbstractStructBase
{
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the type of organization.
     * @var \WorkdayWsdl\\StructType\Organization_TypeObjectType
     */
    public $Organization_Type_Reference;
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the organization.
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_Reference;
    /**
     * Constructor method for Organization_Assignments_DataType
     * @uses Organization_Assignments_DataType::setOrganization_Type_Reference()
     * @uses Organization_Assignments_DataType::setOrganization_Reference()
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference = null, \WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setOrganization_Reference($organization_Reference);
    }
    /**
     * Get Organization_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Organization_TypeObjectType|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * Set Organization_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Assignments_DataType
     */
    public function setOrganization_Type_Reference(\WorkdayWsdl\\StructType\Organization_TypeObjectType $organization_Type_Reference = null)
    {
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Organization_Assignments_DataType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Assignments_DataType
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
