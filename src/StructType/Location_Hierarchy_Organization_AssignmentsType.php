<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Hierarchy_Organization_AssignmentsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Location Hierarchy Organization Assignments
 * @subpackage Structs
 */
class Location_Hierarchy_Organization_AssignmentsType extends AbstractStructBase
{
    /**
     * The Location_Hierarchy_Organization_Assignments_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Location_Hierarchy_Organization_Assignments_DataType[]
     */
    public $Location_Hierarchy_Organization_Assignments_Data;
    /**
     * Constructor method for Location_Hierarchy_Organization_AssignmentsType
     * @uses Location_Hierarchy_Organization_AssignmentsType::setLocation_Hierarchy_Organization_Assignments_Data()
     * @param \StructType\Location_Hierarchy_Organization_Assignments_DataType[] $location_Hierarchy_Organization_Assignments_Data
     */
    public function __construct(array $location_Hierarchy_Organization_Assignments_Data = array())
    {
        $this
            ->setLocation_Hierarchy_Organization_Assignments_Data($location_Hierarchy_Organization_Assignments_Data);
    }
    /**
     * Get Location_Hierarchy_Organization_Assignments_Data value
     * @return \StructType\Location_Hierarchy_Organization_Assignments_DataType[]|null
     */
    public function getLocation_Hierarchy_Organization_Assignments_Data()
    {
        return $this->Location_Hierarchy_Organization_Assignments_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Hierarchy_Organization_Assignments_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Hierarchy_Organization_Assignments_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Hierarchy_Organization_Assignments_DataForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem) {
            // validation for constraint: itemType
            if (!$location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem instanceof \StructType\Location_Hierarchy_Organization_Assignments_DataType) {
                $invalidValues[] = is_object($location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem) ? get_class($location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem) : sprintf('%s(%s)', gettype($location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem), var_export($location_Hierarchy_Organization_AssignmentsTypeLocation_Hierarchy_Organization_Assignments_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Hierarchy_Organization_Assignments_Data property can only contain items of type \StructType\Location_Hierarchy_Organization_Assignments_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Hierarchy_Organization_Assignments_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_Hierarchy_Organization_Assignments_DataType[] $location_Hierarchy_Organization_Assignments_Data
     * @return \StructType\Location_Hierarchy_Organization_AssignmentsType
     */
    public function setLocation_Hierarchy_Organization_Assignments_Data(array $location_Hierarchy_Organization_Assignments_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Hierarchy_Organization_Assignments_DataArrayErrorMessage = self::validateLocation_Hierarchy_Organization_Assignments_DataForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments_Data($location_Hierarchy_Organization_Assignments_Data))) {
            throw new \InvalidArgumentException($location_Hierarchy_Organization_Assignments_DataArrayErrorMessage, __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments_Data = $location_Hierarchy_Organization_Assignments_Data;
        return $this;
    }
    /**
     * Add item to Location_Hierarchy_Organization_Assignments_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_Hierarchy_Organization_Assignments_DataType $item
     * @return \StructType\Location_Hierarchy_Organization_AssignmentsType
     */
    public function addToLocation_Hierarchy_Organization_Assignments_Data(\StructType\Location_Hierarchy_Organization_Assignments_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_Hierarchy_Organization_Assignments_DataType) {
            throw new \InvalidArgumentException(sprintf('The Location_Hierarchy_Organization_Assignments_Data property can only contain items of type \StructType\Location_Hierarchy_Organization_Assignments_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Hierarchy_Organization_AssignmentsType
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
