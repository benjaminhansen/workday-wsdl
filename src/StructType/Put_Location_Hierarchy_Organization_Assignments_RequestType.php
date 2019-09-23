<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Put_Location_Hierarchy_Organization_Assignments_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element for Location Hierarchy Organization Assignment.
 * @subpackage Structs
 */
class Put_Location_Hierarchy_Organization_Assignments_RequestType extends AbstractStructBase
{
    /**
     * The Location_Hierarchy_Organization_Assignments_Data
     * Meta information extracted from the WSDL
     * - documentation: Input data for Organization Assignments; the Location Hierarchy Reference, and Organization Type Data Element
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType
     */
    public $Location_Hierarchy_Organization_Assignments_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Put_Location_Hierarchy_Organization_Assignments_RequestType
     * @uses Put_Location_Hierarchy_Organization_Assignments_RequestType::setLocation_Hierarchy_Organization_Assignments_Data()
     * @uses Put_Location_Hierarchy_Organization_Assignments_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType $location_Hierarchy_Organization_Assignments_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType $location_Hierarchy_Organization_Assignments_Data = null, $version = null)
    {
        $this
            ->setLocation_Hierarchy_Organization_Assignments_Data($location_Hierarchy_Organization_Assignments_Data)
            ->setVersion($version);
    }
    /**
     * Get Location_Hierarchy_Organization_Assignments_Data value
     * @return \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType|null
     */
    public function getLocation_Hierarchy_Organization_Assignments_Data()
    {
        return $this->Location_Hierarchy_Organization_Assignments_Data;
    }
    /**
     * Set Location_Hierarchy_Organization_Assignments_Data value
     * @param \WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType $location_Hierarchy_Organization_Assignments_Data
     * @return \WorkdayWsdl\\StructType\Put_Location_Hierarchy_Organization_Assignments_RequestType
     */
    public function setLocation_Hierarchy_Organization_Assignments_Data(\WorkdayWsdl\\StructType\Location_Hierarchy_Organization_Assignments_DataType $location_Hierarchy_Organization_Assignments_Data = null)
    {
        $this->Location_Hierarchy_Organization_Assignments_Data = $location_Hierarchy_Organization_Assignments_Data;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Location_Hierarchy_Organization_Assignments_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Location_Hierarchy_Organization_Assignments_RequestType
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
