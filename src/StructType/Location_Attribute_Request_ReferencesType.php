<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Attribute_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Location Attribute Request References Web Service Element
 * @subpackage Structs
 */
class Location_Attribute_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Location_Attribute_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Attribute(s) to be returned
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Location_AttributeObjectType[]
     */
    public $Location_Attribute_Reference;
    /**
     * Constructor method for Location_Attribute_Request_ReferencesType
     * @uses Location_Attribute_Request_ReferencesType::setLocation_Attribute_Reference()
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType[] $location_Attribute_Reference
     */
    public function __construct(array $location_Attribute_Reference = array())
    {
        $this
            ->setLocation_Attribute_Reference($location_Attribute_Reference);
    }
    /**
     * Get Location_Attribute_Reference value
     * @return \WorkdayWsdl\\StructType\Location_AttributeObjectType[]|null
     */
    public function getLocation_Attribute_Reference()
    {
        return $this->Location_Attribute_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setLocation_Attribute_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocation_Attribute_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocation_Attribute_ReferenceForArrayConstraintsFromSetLocation_Attribute_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem instanceof \WorkdayWsdl\\StructType\Location_AttributeObjectType) {
                $invalidValues[] = is_object($location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem) ? get_class($location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem) : sprintf('%s(%s)', gettype($location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem), var_export($location_Attribute_Request_ReferencesTypeLocation_Attribute_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Attribute_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_AttributeObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Attribute_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType[] $location_Attribute_Reference
     * @return \WorkdayWsdl\\StructType\Location_Attribute_Request_ReferencesType
     */
    public function setLocation_Attribute_Reference(array $location_Attribute_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($location_Attribute_ReferenceArrayErrorMessage = self::validateLocation_Attribute_ReferenceForArrayConstraintsFromSetLocation_Attribute_Reference($location_Attribute_Reference))) {
            throw new \InvalidArgumentException($location_Attribute_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Location_Attribute_Reference = $location_Attribute_Reference;
        return $this;
    }
    /**
     * Add item to Location_Attribute_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Location_AttributeObjectType $item
     * @return \WorkdayWsdl\\StructType\Location_Attribute_Request_ReferencesType
     */
    public function addToLocation_Attribute_Reference(\WorkdayWsdl\\StructType\Location_AttributeObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Location_AttributeObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Attribute_Reference property can only contain items of type \WorkdayWsdl\\StructType\Location_AttributeObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Attribute_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Attribute_Request_ReferencesType
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
