<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Location and its associated data.
 * @subpackage Structs
 */
class Location_ResponseType extends AbstractStructBase
{
    /**
     * The Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the Location.
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Location_Reference;
    /**
     * The Location_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Location_iDataType
     */
    public $Location_Data;
    /**
     * Constructor method for Location_ResponseType
     * @uses Location_ResponseType::setLocation_Reference()
     * @uses Location_ResponseType::setLocation_Data()
     * @param \StructType\LocationObjectType $location_Reference
     * @param \StructType\Location_iDataType $location_Data
     */
    public function __construct(\StructType\LocationObjectType $location_Reference = null, \StructType\Location_iDataType $location_Data = null)
    {
        $this
            ->setLocation_Reference($location_Reference)
            ->setLocation_Data($location_Data);
    }
    /**
     * Get Location_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_Reference()
    {
        return $this->Location_Reference;
    }
    /**
     * Set Location_Reference value
     * @param \StructType\LocationObjectType $location_Reference
     * @return \StructType\Location_ResponseType
     */
    public function setLocation_Reference(\StructType\LocationObjectType $location_Reference = null)
    {
        $this->Location_Reference = $location_Reference;
        return $this;
    }
    /**
     * Get Location_Data value
     * @return \StructType\Location_iDataType|null
     */
    public function getLocation_Data()
    {
        return $this->Location_Data;
    }
    /**
     * Set Location_Data value
     * @param \StructType\Location_iDataType $location_Data
     * @return \StructType\Location_ResponseType
     */
    public function setLocation_Data(\StructType\Location_iDataType $location_Data = null)
    {
        $this->Location_Data = $location_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_ResponseType
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
