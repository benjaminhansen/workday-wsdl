<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Location_Hierarchy_Organization_Assignments_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned information from the Location Hierarchy Organization Assignments request.
 * @subpackage Structs
 */
class Location_Hierarchy_Organization_Assignments_Response_DataType extends AbstractStructBase
{
    /**
     * The Location_Hierarchy_Organization_Assignments
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType[]
     */
    public $Location_Hierarchy_Organization_Assignments;
    /**
     * Constructor method for
     * Location_Hierarchy_Organization_Assignments_Response_DataType
     * @uses Location_Hierarchy_Organization_Assignments_Response_DataType::setLocation_Hierarchy_Organization_Assignments()
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType[] $location_Hierarchy_Organization_Assignments
     */
    public function __construct(array $location_Hierarchy_Organization_Assignments = array())
    {
        $this
            ->setLocation_Hierarchy_Organization_Assignments($location_Hierarchy_Organization_Assignments);
    }
    /**
     * Get Location_Hierarchy_Organization_Assignments value
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType[]|null
     */
    public function getLocation_Hierarchy_Organization_Assignments()
    {
        return $this->Location_Hierarchy_Organization_Assignments;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Hierarchy_Organization_Assignments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Hierarchy_Organization_Assignments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Hierarchy_Organization_AssignmentsForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem) {
            // validation for constraint: itemType
            if (!$location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem instanceof \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType) {
                $invalidValues[] = is_object($location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem) ? get_class($location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem) : sprintf('%s(%s)', gettype($location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem), var_export($location_Hierarchy_Organization_Assignments_Response_DataTypeLocation_Hierarchy_Organization_AssignmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Hierarchy_Organization_Assignments property can only contain items of type \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Hierarchy_Organization_Assignments value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType[] $location_Hierarchy_Organization_Assignments
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_Response_DataType
     */
    public function setLocation_Hierarchy_Organization_Assignments(array $location_Hierarchy_Organization_Assignments = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Hierarchy_Organization_AssignmentsArrayErrorMessage = self::validateLocation_Hierarchy_Organization_AssignmentsForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments($location_Hierarchy_Organization_Assignments))) {
            throw new \InvalidArgumentException($location_Hierarchy_Organization_AssignmentsArrayErrorMessage, __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments = $location_Hierarchy_Organization_Assignments;
        return $this;
    }
    /**
     * Add item to Location_Hierarchy_Organization_Assignments value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType $item
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_Response_DataType
     */
    public function addToLocation_Hierarchy_Organization_Assignments(\WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType) {
            throw new \InvalidArgumentException(sprintf('The Location_Hierarchy_Organization_Assignments property can only contain items of type \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_AssignmentsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_Response_DataType
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
