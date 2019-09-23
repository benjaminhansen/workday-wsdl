<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Hierarchy_Organization_Assignments_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Assignments information for Location Hierarchy to be updated or returned.
 * @subpackage Structs
 */
class Location_Hierarchy_Organization_Assignments_DataType extends AbstractStructBase
{
    /**
     * The Location_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Hierarchy whose allowed organization assignments will be set/get.
     * @var \WorkdayWsdl\\StructType\Location_HierarchyObjectType
     */
    public $Location_Hierarchy_Reference;
    /**
     * The Location_Hierarchy_Organization_Assignments_by_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Organization Assignments by Organization Type
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType[]
     */
    public $Location_Hierarchy_Organization_Assignments_by_Type_Data;
    /**
     * The Replace_All
     * Meta information extracted from the WSDL
     * - documentation: Set to true if you want to replace all Organization Assignments
     * @var bool
     */
    public $Replace_All;
    /**
     * Constructor method for Location_Hierarchy_Organization_Assignments_DataType
     * @uses Location_Hierarchy_Organization_Assignments_DataType::setLocation_Hierarchy_Reference()
     * @uses Location_Hierarchy_Organization_Assignments_DataType::setLocation_Hierarchy_Organization_Assignments_by_Type_Data()
     * @uses Location_Hierarchy_Organization_Assignments_DataType::setReplace_All()
     * @param \WorkdayWsdl\\StructType\Location_HierarchyObjectType $location_Hierarchy_Reference
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType[] $location_Hierarchy_Organization_Assignments_by_Type_Data
     * @param bool $replace_All
     */
    public function __construct(\WorkdayWsdl\\StructType\Location_HierarchyObjectType $location_Hierarchy_Reference = null, array $location_Hierarchy_Organization_Assignments_by_Type_Data = array(), $replace_All = null)
    {
        $this
            ->setLocation_Hierarchy_Reference($location_Hierarchy_Reference)
            ->setLocation_Hierarchy_Organization_Assignments_by_Type_Data($location_Hierarchy_Organization_Assignments_by_Type_Data)
            ->setReplace_All($replace_All);
    }
    /**
     * Get Location_Hierarchy_Reference value
     * @return \WorkdayWsdl\\StructType\Location_HierarchyObjectType|null
     */
    public function getLocation_Hierarchy_Reference()
    {
        return $this->Location_Hierarchy_Reference;
    }
    /**
     * Set Location_Hierarchy_Reference value
     * @param \WorkdayWsdl\\StructType\Location_HierarchyObjectType $location_Hierarchy_Reference
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
     */
    public function setLocation_Hierarchy_Reference(\WorkdayWsdl\\StructType\Location_HierarchyObjectType $location_Hierarchy_Reference = null)
    {
        $this->Location_Hierarchy_Reference = $location_Hierarchy_Reference;
        return $this;
    }
    /**
     * Get Location_Hierarchy_Organization_Assignments_by_Type_Data value
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType[]|null
     */
    public function getLocation_Hierarchy_Organization_Assignments_by_Type_Data()
    {
        return $this->Location_Hierarchy_Organization_Assignments_by_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Hierarchy_Organization_Assignments_by_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Hierarchy_Organization_Assignments_by_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Hierarchy_Organization_Assignments_by_Type_DataForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments_by_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem) {
            // validation for constraint: itemType
            if (!$location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem instanceof \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType) {
                $invalidValues[] = is_object($location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem) ? get_class($location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem) : sprintf('%s(%s)', gettype($location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem), var_export($location_Hierarchy_Organization_Assignments_DataTypeLocation_Hierarchy_Organization_Assignments_by_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Hierarchy_Organization_Assignments_by_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Hierarchy_Organization_Assignments_by_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType[] $location_Hierarchy_Organization_Assignments_by_Type_Data
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
     */
    public function setLocation_Hierarchy_Organization_Assignments_by_Type_Data(array $location_Hierarchy_Organization_Assignments_by_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Hierarchy_Organization_Assignments_by_Type_DataArrayErrorMessage = self::validateLocation_Hierarchy_Organization_Assignments_by_Type_DataForArrayConstraintsFromSetLocation_Hierarchy_Organization_Assignments_by_Type_Data($location_Hierarchy_Organization_Assignments_by_Type_Data))) {
            throw new \InvalidArgumentException($location_Hierarchy_Organization_Assignments_by_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments_by_Type_Data = $location_Hierarchy_Organization_Assignments_by_Type_Data;
        return $this;
    }
    /**
     * Add item to Location_Hierarchy_Organization_Assignments_by_Type_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
     */
    public function addToLocation_Hierarchy_Organization_Assignments_by_Type_Data(\WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Location_Hierarchy_Organization_Assignments_by_Type_Data property can only contain items of type \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_by_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Hierarchy_Organization_Assignments_by_Type_Data[] = $item;
        return $this;
    }
    /**
     * Get Replace_All value
     * @return bool|null
     */
    public function getReplace_All()
    {
        return $this->Replace_All;
    }
    /**
     * Set Replace_All value
     * @param bool $replace_All
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
     */
    public function setReplace_All($replace_All = null)
    {
        // validation for constraint: boolean
        if (!is_null($replace_All) && !is_bool($replace_All)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($replace_All, true), gettype($replace_All)), __LINE__);
        }
        $this->Replace_All = $replace_All;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
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
