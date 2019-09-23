<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each Location based on the Request Reference or Request Criteria. The data returned is the current information as of the dates in the response filter, and does not include all historical information about the Location.
 * @subpackage Structs
 */
class Location_Response_DataType extends AbstractStructBase
{
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_ResponseType[]
     */
    public $Location;
    /**
     * Constructor method for Location_Response_DataType
     * @uses Location_Response_DataType::setLocation()
     * @param \WorkdayWsdl\\StructType\Location_ResponseType[] $location
     */
    public function __construct(array $location = array())
    {
        $this
            ->setLocation($location);
    }
    /**
     * Get Location value
     * @return \WorkdayWsdl\\StructType\Location_ResponseType[]|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationForArrayConstraintsFromSetLocation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Response_DataTypeLocationItem) {
            // validation for constraint: itemType
            if (!$location_Response_DataTypeLocationItem instanceof \WorkdayWsdl\\StructType\Location_ResponseType) {
                $invalidValues[] = is_object($location_Response_DataTypeLocationItem) ? get_class($location_Response_DataTypeLocationItem) : sprintf('%s(%s)', gettype($location_Response_DataTypeLocationItem), var_export($location_Response_DataTypeLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location property can only contain items of type \WorkdayWsdl\\StructType\Location_ResponseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_ResponseType[] $location
     * @return \WorkdayWsdl\\StructType\Location_Response_DataType
     */
    public function setLocation(array $location = array())
    {
        // validation for constraint: array
        if ('' !== ($locationArrayErrorMessage = self::validateLocationForArrayConstraintsFromSetLocation($location))) {
            throw new \InvalidArgumentException($locationArrayErrorMessage, __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Add item to Location value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_ResponseType $item
     * @return \WorkdayWsdl\\StructType\Location_Response_DataType
     */
    public function addToLocation(\WorkdayWsdl\\StructType\Location_ResponseType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_ResponseType) {
            throw new \InvalidArgumentException(sprintf('The Location property can only contain items of type \WorkdayWsdl\\StructType\Location_ResponseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Response_DataType
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
