<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_AttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Location Attribute Web Service Element
 * @subpackage Structs
 */
class Location_AttributeType extends AbstractStructBase
{
    /**
     * The Location_Attribute_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Location Attribute reference
     * @var \StructType\Location_AttributeObjectType
     */
    public $Location_Attribute_Reference;
    /**
     * The Location_Attribute_Data
     * @var \StructType\Location_Attribute_DataType
     */
    public $Location_Attribute_Data;
    /**
     * Constructor method for Location_AttributeType
     * @uses Location_AttributeType::setLocation_Attribute_Reference()
     * @uses Location_AttributeType::setLocation_Attribute_Data()
     * @param \StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @param \StructType\Location_Attribute_DataType $location_Attribute_Data
     */
    public function __construct(\StructType\Location_AttributeObjectType $location_Attribute_Reference = null, \StructType\Location_Attribute_DataType $location_Attribute_Data = null)
    {
        $this
            ->setLocation_Attribute_Reference($location_Attribute_Reference)
            ->setLocation_Attribute_Data($location_Attribute_Data);
    }
    /**
     * Get Location_Attribute_Reference value
     * @return \StructType\Location_AttributeObjectType|null
     */
    public function getLocation_Attribute_Reference()
    {
        return $this->Location_Attribute_Reference;
    }
    /**
     * Set Location_Attribute_Reference value
     * @param \StructType\Location_AttributeObjectType $location_Attribute_Reference
     * @return \StructType\Location_AttributeType
     */
    public function setLocation_Attribute_Reference(\StructType\Location_AttributeObjectType $location_Attribute_Reference = null)
    {
        $this->Location_Attribute_Reference = $location_Attribute_Reference;
        return $this;
    }
    /**
     * Get Location_Attribute_Data value
     * @return \StructType\Location_Attribute_DataType|null
     */
    public function getLocation_Attribute_Data()
    {
        return $this->Location_Attribute_Data;
    }
    /**
     * Set Location_Attribute_Data value
     * @param \StructType\Location_Attribute_DataType $location_Attribute_Data
     * @return \StructType\Location_AttributeType
     */
    public function setLocation_Attribute_Data(\StructType\Location_Attribute_DataType $location_Attribute_Data = null)
    {
        $this->Location_Attribute_Data = $location_Attribute_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_AttributeType
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
