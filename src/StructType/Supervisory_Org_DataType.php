<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Supervisory_Org_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains details specific to a Supervisory Organization.
 * @subpackage Structs
 */
class Supervisory_Org_DataType extends AbstractStructBase
{
    /**
     * The Staffing_Model
     * Meta information extracted from the WSDL
     * - documentation: The staffing model used for the organization.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Staffing_Model;
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location must be of usage Business Site. | Unique identifier for the primary Location for the organization.
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Organization_Assignments_Data
     * Meta information extracted from the WSDL
     * - documentation: Contain information for Staffing related Organizations; minimally for Company, Cost Center and Region.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Organization_Assignments_DataType[]
     */
    public $Organization_Assignments_Data;
    /**
     * The Staffing_Restrictions_Data
     * Meta information extracted from the WSDL
     * - documentation: For Supervisory Organizations, contain staffing restrictions.
     * - minOccurs: 0
     * @var \StructType\Position_Group_Restriction_Summary_DataType
     */
    public $Staffing_Restrictions_Data;
    /**
     * The Available_For_Hire
     * Meta information extracted from the WSDL
     * - documentation: Returns a true if this is able to be filled by a worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Available_For_Hire;
    /**
     * The Hiring_Freeze
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether a Hiring Freeze is currently in affect.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Hiring_Freeze;
    /**
     * Constructor method for Supervisory_Org_DataType
     * @uses Supervisory_Org_DataType::setStaffing_Model()
     * @uses Supervisory_Org_DataType::setLocation_Reference()
     * @uses Supervisory_Org_DataType::setOrganization_Assignments_Data()
     * @uses Supervisory_Org_DataType::setStaffing_Restrictions_Data()
     * @uses Supervisory_Org_DataType::setAvailable_For_Hire()
     * @uses Supervisory_Org_DataType::setHiring_Freeze()
     * @param string $staffing_Model
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\Organization_Assignments_DataType[] $organization_Assignments_Data
     * @param \StructType\Position_Group_Restriction_Summary_DataType $staffing_Restrictions_Data
     * @param bool $available_For_Hire
     * @param bool $hiring_Freeze
     */
    public function __construct($staffing_Model = null, \StructType\LocationObjectType $location_Reference = null, array $organization_Assignments_Data = array(), \StructType\Position_Group_Restriction_Summary_DataType $staffing_Restrictions_Data = null, $available_For_Hire = null, $hiring_Freeze = null)
    {
        $this
            ->setStaffing_Model($staffing_Model)
            ->setLocation_Reference($location_Reference)
            ->setOrganization_Assignments_Data($organization_Assignments_Data)
            ->setStaffing_Restrictions_Data($staffing_Restrictions_Data)
            ->setAvailable_For_Hire($available_For_Hire)
            ->setHiring_Freeze($hiring_Freeze);
    }
    /**
     * Get Staffing_Model value
     * @return string|null
     */
    public function getStaffing_Model()
    {
        return $this->Staffing_Model;
    }
    /**
     * Set Staffing_Model value
     * @param string $staffing_Model
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setStaffing_Model($staffing_Model = null)
    {
        // validation for constraint: string
        if (!is_null($staffing_Model) && !is_string($staffing_Model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staffing_Model, true), gettype($staffing_Model)), __LINE__);
        }
        $this->Staffing_Model = $staffing_Model;
        return $this;
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Organization_Assignments_Data value
     * @return \StructType\Organization_Assignments_DataType[]|null
     */
    public function getOrganization_Assignments_Data()
    {
        return $this->Organization_Assignments_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Assignments_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Assignments_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Assignments_DataForArrayConstraintsFromSetOrganization_Assignments_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $supervisory_Org_DataTypeOrganization_Assignments_DataItem) {
            // validation for constraint: itemType
            if (!$supervisory_Org_DataTypeOrganization_Assignments_DataItem instanceof \StructType\Organization_Assignments_DataType) {
                $invalidValues[] = is_object($supervisory_Org_DataTypeOrganization_Assignments_DataItem) ? get_class($supervisory_Org_DataTypeOrganization_Assignments_DataItem) : sprintf('%s(%s)', gettype($supervisory_Org_DataTypeOrganization_Assignments_DataItem), var_export($supervisory_Org_DataTypeOrganization_Assignments_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Assignments_Data property can only contain items of type \StructType\Organization_Assignments_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Assignments_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignments_DataType[] $organization_Assignments_Data
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setOrganization_Assignments_Data(array $organization_Assignments_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Assignments_DataArrayErrorMessage = self::validateOrganization_Assignments_DataForArrayConstraintsFromSetOrganization_Assignments_Data($organization_Assignments_Data))) {
            throw new \InvalidArgumentException($organization_Assignments_DataArrayErrorMessage, __LINE__);
        }
        $this->Organization_Assignments_Data = $organization_Assignments_Data;
        return $this;
    }
    /**
     * Add item to Organization_Assignments_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Organization_Assignments_DataType $item
     * @return \StructType\Supervisory_Org_DataType
     */
    public function addToOrganization_Assignments_Data(\StructType\Organization_Assignments_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Organization_Assignments_DataType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Assignments_Data property can only contain items of type \StructType\Organization_Assignments_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Assignments_Data[] = $item;
        return $this;
    }
    /**
     * Get Staffing_Restrictions_Data value
     * @return \StructType\Position_Group_Restriction_Summary_DataType|null
     */
    public function getStaffing_Restrictions_Data()
    {
        return $this->Staffing_Restrictions_Data;
    }
    /**
     * Set Staffing_Restrictions_Data value
     * @param \StructType\Position_Group_Restriction_Summary_DataType $staffing_Restrictions_Data
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setStaffing_Restrictions_Data(\StructType\Position_Group_Restriction_Summary_DataType $staffing_Restrictions_Data = null)
    {
        $this->Staffing_Restrictions_Data = $staffing_Restrictions_Data;
        return $this;
    }
    /**
     * Get Available_For_Hire value
     * @return bool|null
     */
    public function getAvailable_For_Hire()
    {
        return $this->Available_For_Hire;
    }
    /**
     * Set Available_For_Hire value
     * @param bool $available_For_Hire
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setAvailable_For_Hire($available_For_Hire = null)
    {
        // validation for constraint: boolean
        if (!is_null($available_For_Hire) && !is_bool($available_For_Hire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($available_For_Hire, true), gettype($available_For_Hire)), __LINE__);
        }
        $this->Available_For_Hire = $available_For_Hire;
        return $this;
    }
    /**
     * Get Hiring_Freeze value
     * @return bool|null
     */
    public function getHiring_Freeze()
    {
        return $this->Hiring_Freeze;
    }
    /**
     * Set Hiring_Freeze value
     * @param bool $hiring_Freeze
     * @return \StructType\Supervisory_Org_DataType
     */
    public function setHiring_Freeze($hiring_Freeze = null)
    {
        // validation for constraint: boolean
        if (!is_null($hiring_Freeze) && !is_bool($hiring_Freeze)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hiring_Freeze, true), gettype($hiring_Freeze)), __LINE__);
        }
        $this->Hiring_Freeze = $hiring_Freeze;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Supervisory_Org_DataType
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
