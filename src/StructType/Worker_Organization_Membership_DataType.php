<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Organization_Membership_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the organization reference and details about an organization.
 * @subpackage Structs
 */
class Worker_Organization_Membership_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the organization.
     * @var \WorkdayWsdl\\StructType\Position_SetObjectType
     */
    public $Organization_Reference;
    /**
     * The Organization_Data
     * @var \WorkdayWsdl\\StructType\Organization_Summary_DataType
     */
    public $Organization_Data;
    /**
     * Constructor method for Worker_Organization_Membership_DataType
     * @uses Worker_Organization_Membership_DataType::setOrganization_Reference()
     * @uses Worker_Organization_Membership_DataType::setOrganization_Data()
     * @param \WorkdayWsdl\\StructType\Position_SetObjectType $organization_Reference
     * @param \WorkdayWsdl\\StructType\Organization_Summary_DataType $organization_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Position_SetObjectType $organization_Reference = null, \WorkdayWsdl\\StructType\Organization_Summary_DataType $organization_Data = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Data($organization_Data);
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Position_SetObjectType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \WorkdayWsdl\\StructType\Position_SetObjectType $organization_Reference
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType
     */
    public function setOrganization_Reference(\WorkdayWsdl\\StructType\Position_SetObjectType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Get Organization_Data value
     * @return \WorkdayWsdl\\StructType\Organization_Summary_DataType|null
     */
    public function getOrganization_Data()
    {
        return $this->Organization_Data;
    }
    /**
     * Set Organization_Data value
     * @param \WorkdayWsdl\\StructType\Organization_Summary_DataType $organization_Data
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType
     */
    public function setOrganization_Data(\WorkdayWsdl\\StructType\Organization_Summary_DataType $organization_Data = null)
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
     * @return \WorkdayWsdl\\StructType\Worker_Organization_Membership_DataType
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
