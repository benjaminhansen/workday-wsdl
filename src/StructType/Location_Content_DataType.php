<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Content_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing a brief summary of Location data.
 * @subpackage Structs
 */
class Location_Content_DataType extends AbstractStructBase
{
    /**
     * The Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Integration_ID_DataType
     */
    public $Integration_ID_Data;
    /**
     * The Location_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Location Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location_Name;
    /**
     * The Location_Type_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Location_Type_Reference_DataType[]
     */
    public $Location_Type_Reference;
    /**
     * The Time_Profile_Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Time_Profile_Reference_DataType[]
     */
    public $Time_Profile_Reference;
    /**
     * Constructor method for Location_Content_DataType
     * @uses Location_Content_DataType::setIntegration_ID_Data()
     * @uses Location_Content_DataType::setLocation_Name()
     * @uses Location_Content_DataType::setLocation_Type_Reference()
     * @uses Location_Content_DataType::setTime_Profile_Reference()
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @param string $location_Name
     * @param \StructType\Location_Type_Reference_DataType[] $location_Type_Reference
     * @param \StructType\Time_Profile_Reference_DataType[] $time_Profile_Reference
     */
    public function __construct(\StructType\External_Integration_ID_DataType $integration_ID_Data = null, $location_Name = null, array $location_Type_Reference = array(), array $time_Profile_Reference = array())
    {
        $this
            ->setIntegration_ID_Data($integration_ID_Data)
            ->setLocation_Name($location_Name)
            ->setLocation_Type_Reference($location_Type_Reference)
            ->setTime_Profile_Reference($time_Profile_Reference);
    }
    /**
     * Get Integration_ID_Data value
     * @return \StructType\External_Integration_ID_DataType|null
     */
    public function getIntegration_ID_Data()
    {
        return $this->Integration_ID_Data;
    }
    /**
     * Set Integration_ID_Data value
     * @param \StructType\External_Integration_ID_DataType $integration_ID_Data
     * @return \StructType\Location_Content_DataType
     */
    public function setIntegration_ID_Data(\StructType\External_Integration_ID_DataType $integration_ID_Data = null)
    {
        $this->Integration_ID_Data = $integration_ID_Data;
        return $this;
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
     * @return \StructType\Location_Content_DataType
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
     * Get Location_Type_Reference value
     * @return \StructType\Location_Type_Reference_DataType[]|null
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
        foreach ($values as $location_Content_DataTypeLocation_Type_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Content_DataTypeLocation_Type_ReferenceItem instanceof \StructType\Location_Type_Reference_DataType) {
                $invalidValues[] = is_object($location_Content_DataTypeLocation_Type_ReferenceItem) ? get_class($location_Content_DataTypeLocation_Type_ReferenceItem) : sprintf('%s(%s)', gettype($location_Content_DataTypeLocation_Type_ReferenceItem), var_export($location_Content_DataTypeLocation_Type_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Type_Reference property can only contain items of type \StructType\Location_Type_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Type_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_Type_Reference_DataType[] $location_Type_Reference
     * @return \StructType\Location_Content_DataType
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
     * @param \StructType\Location_Type_Reference_DataType $item
     * @return \StructType\Location_Content_DataType
     */
    public function addToLocation_Type_Reference(\StructType\Location_Type_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_Type_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Location_Type_Reference property can only contain items of type \StructType\Location_Type_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Type_Reference[] = $item;
        return $this;
    }
    /**
     * Get Time_Profile_Reference value
     * @return \StructType\Time_Profile_Reference_DataType[]|null
     */
    public function getTime_Profile_Reference()
    {
        return $this->Time_Profile_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setTime_Profile_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTime_Profile_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTime_Profile_ReferenceForArrayConstraintsFromSetTime_Profile_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Content_DataTypeTime_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Content_DataTypeTime_Profile_ReferenceItem instanceof \StructType\Time_Profile_Reference_DataType) {
                $invalidValues[] = is_object($location_Content_DataTypeTime_Profile_ReferenceItem) ? get_class($location_Content_DataTypeTime_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($location_Content_DataTypeTime_Profile_ReferenceItem), var_export($location_Content_DataTypeTime_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Time_Profile_Reference property can only contain items of type \StructType\Time_Profile_Reference_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Time_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Time_Profile_Reference_DataType[] $time_Profile_Reference
     * @return \StructType\Location_Content_DataType
     */
    public function setTime_Profile_Reference(array $time_Profile_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($time_Profile_ReferenceArrayErrorMessage = self::validateTime_Profile_ReferenceForArrayConstraintsFromSetTime_Profile_Reference($time_Profile_Reference))) {
            throw new \InvalidArgumentException($time_Profile_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Time_Profile_Reference = $time_Profile_Reference;
        return $this;
    }
    /**
     * Add item to Time_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Time_Profile_Reference_DataType $item
     * @return \StructType\Location_Content_DataType
     */
    public function addToTime_Profile_Reference(\StructType\Time_Profile_Reference_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Time_Profile_Reference_DataType) {
            throw new \InvalidArgumentException(sprintf('The Time_Profile_Reference property can only contain items of type \StructType\Time_Profile_Reference_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Time_Profile_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Content_DataType
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
