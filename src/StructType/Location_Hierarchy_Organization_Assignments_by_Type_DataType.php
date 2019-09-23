<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Location_Hierarchy_Organization_Assignments_by_Type_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Assignments cannot be specified for this organization type. | Input Element for Organization Type and Allowed Organizations data.
 * @subpackage Structs
 */
class Location_Hierarchy_Organization_Assignments_by_Type_DataType extends AbstractStructBase
{
    /**
     * The Organization_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Organization Type for Allowed Organizations
     * @var \StructType\Organization_TypeObjectType
     */
    public $Organization_Type_Reference;
    /**
     * The Allowed_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Allowed Organizations
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\StaffObjectType[]
     */
    public $Allowed_Organization_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Set to true if you want to delete the organization assignments
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for
     * Location_Hierarchy_Organization_Assignments_by_Type_DataType
     * @uses Location_Hierarchy_Organization_Assignments_by_Type_DataType::setOrganization_Type_Reference()
     * @uses Location_Hierarchy_Organization_Assignments_by_Type_DataType::setAllowed_Organization_Reference()
     * @uses Location_Hierarchy_Organization_Assignments_by_Type_DataType::setDelete()
     * @param \StructType\Organization_TypeObjectType $organization_Type_Reference
     * @param \StructType\StaffObjectType[] $allowed_Organization_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\Organization_TypeObjectType $organization_Type_Reference = null, array $allowed_Organization_Reference = array(), $delete = null)
    {
        $this
            ->setOrganization_Type_Reference($organization_Type_Reference)
            ->setAllowed_Organization_Reference($allowed_Organization_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Organization_Type_Reference value
     * @return \StructType\Organization_TypeObjectType|null
     */
    public function getOrganization_Type_Reference()
    {
        return $this->Organization_Type_Reference;
    }
    /**
     * Set Organization_Type_Reference value
     * @param \StructType\Organization_TypeObjectType $organization_Type_Reference
     * @return \StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType
     */
    public function setOrganization_Type_Reference(\StructType\Organization_TypeObjectType $organization_Type_Reference = null)
    {
        $this->Organization_Type_Reference = $organization_Type_Reference;
        return $this;
    }
    /**
     * Get Allowed_Organization_Reference value
     * @return \StructType\StaffObjectType[]|null
     */
    public function getAllowed_Organization_Reference()
    {
        return $this->Allowed_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowed_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowed_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowed_Organization_ReferenceForArrayConstraintsFromSetAllowed_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem instanceof \StructType\StaffObjectType) {
                $invalidValues[] = is_object($location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem) ? get_class($location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem), var_export($location_Hierarchy_Organization_Assignments_by_Type_DataTypeAllowed_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowed_Organization_Reference property can only contain items of type \StructType\StaffObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowed_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\StaffObjectType[] $allowed_Organization_Reference
     * @return \StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType
     */
    public function setAllowed_Organization_Reference(array $allowed_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($allowed_Organization_ReferenceArrayErrorMessage = self::validateAllowed_Organization_ReferenceForArrayConstraintsFromSetAllowed_Organization_Reference($allowed_Organization_Reference))) {
            throw new \InvalidArgumentException($allowed_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Allowed_Organization_Reference = $allowed_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Allowed_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\StaffObjectType $item
     * @return \StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType
     */
    public function addToAllowed_Organization_Reference(\StructType\StaffObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StaffObjectType) {
            throw new \InvalidArgumentException(sprintf('The Allowed_Organization_Reference property can only contain items of type \StructType\StaffObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowed_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType
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
