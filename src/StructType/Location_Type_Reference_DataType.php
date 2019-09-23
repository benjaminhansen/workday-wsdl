<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Type_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Location Type.
 * @subpackage Structs
 */
class Location_Type_Reference_DataType extends AbstractStructBase
{
    /**
     * The Location_Type_Description
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Location Type must exist for the given value of Location Type Description. | Unique attribute name/description identifying a valid instance of Location Type.
     * - maxOccurs: 1
     * @var string
     */
    public $Location_Type_Description;
    /**
     * Constructor method for Location_Type_Reference_DataType
     * @uses Location_Type_Reference_DataType::setLocation_Type_Description()
     * @param string $location_Type_Description
     */
    public function __construct($location_Type_Description = null)
    {
        $this
            ->setLocation_Type_Description($location_Type_Description);
    }
    /**
     * Get Location_Type_Description value
     * @return string|null
     */
    public function getLocation_Type_Description()
    {
        return $this->Location_Type_Description;
    }
    /**
     * Set Location_Type_Description value
     * @param string $location_Type_Description
     * @return \WorkdayWsdl\\StructType\Location_Type_Reference_DataType
     */
    public function setLocation_Type_Description($location_Type_Description = null)
    {
        // validation for constraint: string
        if (!is_null($location_Type_Description) && !is_string($location_Type_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location_Type_Description, true), gettype($location_Type_Description)), __LINE__);
        }
        $this->Location_Type_Description = $location_Type_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Location_Type_Reference_DataType
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
