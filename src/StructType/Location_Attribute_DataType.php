<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Attribute_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Web Service Element holding Location Attribute Data
 * @subpackage Structs
 */
class Location_Attribute_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the Location Attribute
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Location_Attribute_Name
     * Meta information extracted from the WSDL
     * - documentation: The Location Attribute Name
     * - maxOccurs: 1
     * @var string
     */
    public $Location_Attribute_Name;
    /**
     * The Location_Usage_Reference
     * Meta information extracted from the WSDL
     * - documentation: References the Location Usages of the Location Attribute
     * - maxOccurs: unbounded
     * @var \StructType\Location_UsageObjectType[]
     */
    public $Location_Usage_Reference;
    /**
     * The Location_Attribute_Inactive
     * Meta information extracted from the WSDL
     * - documentation: Location Attribute is Inactive
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Location_Attribute_Inactive;
    /**
     * Constructor method for Location_Attribute_DataType
     * @uses Location_Attribute_DataType::setID()
     * @uses Location_Attribute_DataType::setLocation_Attribute_Name()
     * @uses Location_Attribute_DataType::setLocation_Usage_Reference()
     * @uses Location_Attribute_DataType::setLocation_Attribute_Inactive()
     * @param string $iD
     * @param string $location_Attribute_Name
     * @param \StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @param bool $location_Attribute_Inactive
     */
    public function __construct($iD = null, $location_Attribute_Name = null, array $location_Usage_Reference = array(), $location_Attribute_Inactive = null)
    {
        $this
            ->setID($iD)
            ->setLocation_Attribute_Name($location_Attribute_Name)
            ->setLocation_Usage_Reference($location_Usage_Reference)
            ->setLocation_Attribute_Inactive($location_Attribute_Inactive);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Location_Attribute_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Location_Attribute_Name value
     * @return string|null
     */
    public function getLocation_Attribute_Name()
    {
        return $this->Location_Attribute_Name;
    }
    /**
     * Set Location_Attribute_Name value
     * @param string $location_Attribute_Name
     * @return \StructType\Location_Attribute_DataType
     */
    public function setLocation_Attribute_Name($location_Attribute_Name = null)
    {
        // validation for constraint: string
        if (!is_null($location_Attribute_Name) && !is_string($location_Attribute_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Attribute_Name, true), gettype($location_Attribute_Name)), __LINE__);
        }
        $this->Location_Attribute_Name = $location_Attribute_Name;
        return $this;
    }
    /**
     * Get Location_Usage_Reference value
     * @return \StructType\Location_UsageObjectType[]|null
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
        foreach ($values as $location_Attribute_DataTypeLocation_Usage_ReferenceItem) {
            // validation for constraint: itemType
            if (!$location_Attribute_DataTypeLocation_Usage_ReferenceItem instanceof \StructType\Location_UsageObjectType) {
                $invalidValues[] = is_object($location_Attribute_DataTypeLocation_Usage_ReferenceItem) ? get_class($location_Attribute_DataTypeLocation_Usage_ReferenceItem) : sprintf('%s(%s)', gettype($location_Attribute_DataTypeLocation_Usage_ReferenceItem), var_export($location_Attribute_DataTypeLocation_Usage_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Location_Usage_Reference property can only contain items of type \StructType\Location_UsageObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Location_Usage_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Location_UsageObjectType[] $location_Usage_Reference
     * @return \StructType\Location_Attribute_DataType
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
     * @param \StructType\Location_UsageObjectType $item
     * @return \StructType\Location_Attribute_DataType
     */
    public function addToLocation_Usage_Reference(\StructType\Location_UsageObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Location_UsageObjectType) {
            throw new \InvalidArgumentException(sprintf('The Location_Usage_Reference property can only contain items of type \StructType\Location_UsageObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Location_Usage_Reference[] = $item;
        return $this;
    }
    /**
     * Get Location_Attribute_Inactive value
     * @return bool|null
     */
    public function getLocation_Attribute_Inactive()
    {
        return $this->Location_Attribute_Inactive;
    }
    /**
     * Set Location_Attribute_Inactive value
     * @param bool $location_Attribute_Inactive
     * @return \StructType\Location_Attribute_DataType
     */
    public function setLocation_Attribute_Inactive($location_Attribute_Inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($location_Attribute_Inactive) && !is_bool($location_Attribute_Inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($location_Attribute_Inactive, true), gettype($location_Attribute_Inactive)), __LINE__);
        }
        $this->Location_Attribute_Inactive = $location_Attribute_Inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Attribute_DataType
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
