<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Request_CriteriaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing filtering criteria to specify the Location to return in the response.
 * @subpackage Structs
 */
class Location_Request_CriteriaType extends AbstractStructBase
{
    /**
     * The Location_Name
     * Meta information extracted from the WSDL
     * - documentation: Location Name for the request criteria.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_Name;
    /**
     * The Location_Usage_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the usage of the Location. (e.g. Business Site, Work Space, etc.)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_UsageObjectType[]
     */
    public $Location_Usage_Reference;
    /**
     * The Location_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The location type associated with the location that ties to the usage that has been setup.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_TypeObjectType[]
     */
    public $Location_Type_Reference;
    /**
     * The Exclude_Inactive_Locations
     * Meta information extracted from the WSDL
     * - documentation: Excludes inactive locations from being returned in the response.
     * - choice: Exclude_Inactive_Locations | Exclude_Active_Locations
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Inactive_Locations;
    /**
     * The Exclude_Active_Locations
     * Meta information extracted from the WSDL
     * - documentation: Excludes active locations from being returned in the response.
     * - choice: Exclude_Inactive_Locations | Exclude_Active_Locations
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude_Active_Locations;
    /**
     * The Field_And_Parameter_Criteria_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType[]
     */
    public $Field_And_Parameter_Criteria_Data;
    /**
     * Constructor method for Location_Request_CriteriaType
     * @uses Location_Request_CriteriaType::setLocation_Name()
     * @uses Location_Request_CriteriaType::setLocation_Usage_Reference()
     * @uses Location_Request_CriteriaType::setLocation_Type_Reference()
     * @uses Location_Request_CriteriaType::setExclude_Inactive_Locations()
     * @uses Location_Request_CriteriaType::setExclude_Active_Locations()
     * @uses Location_Request_CriteriaType::setField_And_Parameter_Criteria_Data()
     * @param string $location_Name
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType[] $location_Type_Reference
     * @param bool $exclude_Inactive_Locations
     * @param bool $exclude_Active_Locations
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType[] $field_And_Parameter_Criteria_Data
     */
    public function __construct($location_Name = null, array $location_Usage_Reference = array(), array $location_Type_Reference = array(), $exclude_Inactive_Locations = null, $exclude_Active_Locations = null, array $field_And_Parameter_Criteria_Data = array())
    {
        $this
            ->setLocation_Name($location_Name)
            ->setLocation_Usage_Reference($location_Usage_Reference)
            ->setLocation_Type_Reference($location_Type_Reference)
            ->setExclude_Inactive_Locations($exclude_Inactive_Locations)
            ->setExclude_Active_Locations($exclude_Active_Locations)
            ->setField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data);
    }
    /**
     * Get Location_Name value
     * @return string|null
     */
    public function getLocation_Name()
    {
        return $this->Location_Name;
    }
    /**
     * Set Location_Name value
     * @param string $location_Name
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setLocation_Name($location_Name = null)
    {
        // validation for constraint: string
        if (!is_null($location_Name) && !is_string($location_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Name, true), gettype($location_Name)), __LINE__);
        }
        $this->Location_Name = $location_Name;
        return $this;
    }
    /**
     * Get Location_Usage_Reference value
     * @return \WorkdayWsdl\\StructType\Location_UsageObjectType[]|null
     */
    public function getLocation_Usage_Reference()
    {
        return $this->Location_Usage_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Usage_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Usage_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Usage_ReferenceForArrayConstraintsFromSetLocation_Usage_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Request_CriteriaTypeLocation_Usage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Request_CriteriaTypeLocation_Usage_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_UsageObjectType) {
                $invalidValues[] = is_object($location_Request_CriteriaTypeLocation_Usage_ReferenceItem) ? get_class($location_Request_CriteriaTypeLocation_Usage_ReferenceItem) : sprintf('%s(%s)', gettype($location_Request_CriteriaTypeLocation_Usage_ReferenceItem), var_export($location_Request_CriteriaTypeLocation_Usage_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Usage_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_UsageObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Usage_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setLocation_Usage_Reference(array $location_Usage_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Usage_ReferenceArrayErrorMessage = self::validateLocation_Usage_ReferenceForArrayConstraintsFromSetLocation_Usage_Reference($location_Usage_Reference))) {
            throw new \InvalidArgumentException($location_Usage_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Usage_Reference = $location_Usage_Reference;
        return $this;
    }
    /**
     * Add item to Location_Usage_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_UsageObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function addToLocation_Usage_Reference(\WorkdayWsdl\\StructType\Location_UsageObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_UsageObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Usage_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_UsageObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Usage_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Location_TypeObjectType[]|null
     */
    public function getLocation_Type_Reference()
    {
        return $this->Location_Type_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Type_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Type_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Type_ReferenceForArrayConstraintsFromSetLocation_Type_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Request_CriteriaTypeLocation_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Request_CriteriaTypeLocation_Type_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_TypeObjectType) {
                $invalidValues[] = is_object($location_Request_CriteriaTypeLocation_Type_ReferenceItem) ? get_class($location_Request_CriteriaTypeLocation_Type_ReferenceItem) : sprintf('%s(%s)', gettype($location_Request_CriteriaTypeLocation_Type_ReferenceItem), var_export($location_Request_CriteriaTypeLocation_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_TypeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType[] $location_Type_Reference
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setLocation_Type_Reference(array $location_Type_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Type_ReferenceArrayErrorMessage = self::validateLocation_Type_ReferenceForArrayConstraintsFromSetLocation_Type_Reference($location_Type_Reference))) {
            throw new \InvalidArgumentException($location_Type_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Type_Reference = $location_Type_Reference;
        return $this;
    }
    /**
     * Add item to Location_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_TypeObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function addToLocation_Type_Reference(\WorkdayWsdl\\StructType\Location_TypeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_TypeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Type_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_TypeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Exclude_Inactive_Locations value
     * @return bool|null
     */
    public function getExclude_Inactive_Locations()
    {
        return isset($this->Exclude_Inactive_Locations) ? $this->Exclude_Inactive_Locations : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExclude_Inactive_Locations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExclude_Inactive_Locations method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExclude_Inactive_LocationsForChoiceConstraintsFromSetExclude_Inactive_Locations($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Exclude_Active_Locations',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Exclude_Inactive_Locations can\'t be set as the property %s is already set. Only one property must be set among these properties: Exclude_Inactive_Locations, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Exclude_Inactive_Locations value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $exclude_Inactive_Locations
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setExclude_Inactive_Locations($exclude_Inactive_Locations = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Inactive_Locations) && !is_bool($exclude_Inactive_Locations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Inactive_Locations, true), gettype($exclude_Inactive_Locations)), __LINE__);
        }
        // validation for constraint: choice(Exclude_Inactive_Locations, Exclude_Active_Locations)
        if ('' !== ($exclude_Inactive_LocationsChoiceErrorMessage = self::validateExclude_Inactive_LocationsForChoiceConstraintsFromSetExclude_Inactive_Locations($exclude_Inactive_Locations))) {
            throw new \InvalidArgumentException($exclude_Inactive_LocationsChoiceErrorMessage, __LINE__);
        }
        if (is_null($exclude_Inactive_Locations) || (is_array($exclude_Inactive_Locations) && empty($exclude_Inactive_Locations))) {
            unset($this->Exclude_Inactive_Locations);
        } else {
            $this->Exclude_Inactive_Locations = $exclude_Inactive_Locations;
        }
        return $this;
    }
    /**
     * Get Exclude_Active_Locations value
     * @return bool|null
     */
    public function getExclude_Active_Locations()
    {
        return isset($this->Exclude_Active_Locations) ? $this->Exclude_Active_Locations : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExclude_Active_Locations method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExclude_Active_Locations method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExclude_Active_LocationsForChoiceConstraintsFromSetExclude_Active_Locations($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Exclude_Inactive_Locations',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Exclude_Active_Locations can\'t be set as the property %s is already set. Only one property must be set among these properties: Exclude_Active_Locations, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Exclude_Active_Locations value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param bool $exclude_Active_Locations
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setExclude_Active_Locations($exclude_Active_Locations = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude_Active_Locations) && !is_bool($exclude_Active_Locations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exclude_Active_Locations, true), gettype($exclude_Active_Locations)), __LINE__);
        }
        // validation for constraint: choice(Exclude_Inactive_Locations, Exclude_Active_Locations)
        if ('' !== ($exclude_Active_LocationsChoiceErrorMessage = self::validateExclude_Active_LocationsForChoiceConstraintsFromSetExclude_Active_Locations($exclude_Active_Locations))) {
            throw new \InvalidArgumentException($exclude_Active_LocationsChoiceErrorMessage, __LINE__);
        }
        if (is_null($exclude_Active_Locations) || (is_array($exclude_Active_Locations) && empty($exclude_Active_Locations))) {
            unset($this->Exclude_Active_Locations);
        } else {
            $this->Exclude_Active_Locations = $exclude_Active_Locations;
        }
        return $this;
    }
    /**
     * Get Field_And_Parameter_Criteria_Data value
     * @return \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType[]|null
     */
    public function getField_And_Parameter_Criteria_Data()
    {
        return $this->Field_And_Parameter_Criteria_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setField_And_Parameter_Criteria_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setField_And_Parameter_Criteria_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateField_And_Parameter_Criteria_DataForArrayConstraintsFromSetField_And_Parameter_Criteria_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem) {
            // validation for constraint: itemType
            if (!$location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem instanceof \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType) {
                $invalidValues[] = is_object($location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem) ? get_class($location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem) : sprintf('%s(%s)', gettype($location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem), var_export($location_Request_CriteriaTypeField_And_Parameter_Criteria_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Field_And_Parameter_Criteria_Data property can only contain items of type \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Field_And_Parameter_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType[] $field_And_Parameter_Criteria_Data
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function setField_And_Parameter_Criteria_Data(array $field_And_Parameter_Criteria_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($field_And_Parameter_Criteria_DataArrayErrorMessage = self::validateField_And_Parameter_Criteria_DataForArrayConstraintsFromSetField_And_Parameter_Criteria_Data($field_And_Parameter_Criteria_Data))) {
            throw new \InvalidArgumentException($field_And_Parameter_Criteria_DataArrayErrorMessage, __LINE__);
        }
        $this->Field_And_Parameter_Criteria_Data = $field_And_Parameter_Criteria_Data;
        return $this;
    }
    /**
     * Add item to Field_And_Parameter_Criteria_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $item
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
     */
    public function addToField_And_Parameter_Criteria_Data(\WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType) {
            throw new \InvalidArgumentException(sprintf('The Field_And_Parameter_Criteria_Data property can only contain items of type \WorkdayWsdl\\StructType\Field_And_Parameter_Criteria_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Field_And_Parameter_Criteria_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Request_CriteriaType
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
