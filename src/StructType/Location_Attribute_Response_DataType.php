<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Attribute_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Location Attribute Response Data Web Service Element
 * @subpackage Structs
 */
class Location_Attribute_Response_DataType extends AbstractStructBase
{
    /**
     * The Location_Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Location_AttributeType[]
     */
    public $Location_Attribute;
    /**
     * Constructor method for Location_Attribute_Response_DataType
     * @uses Location_Attribute_Response_DataType::setLocation_Attribute()
     * @param \StructType\Location_AttributeType[] $location_Attribute
     */
    public function __construct(array $location_Attribute = array())
    {
        $this
            ->setLocation_Attribute($location_Attribute);
    }
    /**
     * Get Location_Attribute value
     * @return \StructType\Location_AttributeType[]|null
     */
    public function getLocation_Attribute()
    {
        return $this->Location_Attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Attribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Attribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_AttributeForArrayConstraintsFromSetLocation_Attribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Attribute_Response_DataTypeLocation_AttributeItem) {
            // validation for constraint: itemType
            if (!$location_Attribute_Response_DataTypeLocation_AttributeItem instanceof \StructType\Location_AttributeType) {
                $invalidValues[] = is_object($location_Attribute_Response_DataTypeLocation_AttributeItem) ? get_class($location_Attribute_Response_DataTypeLocation_AttributeItem) : sprintf('%s(%s)', gettype($location_Attribute_Response_DataTypeLocation_AttributeItem), var_export($location_Attribute_Response_DataTypeLocation_AttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Attribute property can only contain items of type \StructType\Location_AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_AttributeType[] $location_Attribute
     * @return \StructType\Location_Attribute_Response_DataType
     */
    public function setLocation_Attribute(array $location_Attribute = array())
    {
        // validation for constraint: array
        if ('' !== ($location_AttributeArrayErrorMessage = self::validateLocation_AttributeForArrayConstraintsFromSetLocation_Attribute($location_Attribute))) {
            throw new \InvalidArgumentException($location_AttributeArrayErrorMessage, __LINE__);
        }
        $this->Location_Attribute = $location_Attribute;
        return $this;
    }
    /**
     * Add item to Location_Attribute value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_AttributeType $item
     * @return \StructType\Location_Attribute_Response_DataType
     */
    public function addToLocation_Attribute(\StructType\Location_AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Location_Attribute property can only contain items of type \StructType\Location_AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Attribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Attribute_Response_DataType
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
