<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_LocationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Safety Incident Location
 * @subpackage Structs
 */
class Safety_Incident_LocationType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Location_Reference
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType
     */
    public $Safety_Incident_Location_Reference;
    /**
     * The Safety_Incident_Location_Data
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident Location Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType
     */
    public $Safety_Incident_Location_Data;
    /**
     * Constructor method for Safety_Incident_LocationType
     * @uses Safety_Incident_LocationType::setSafety_Incident_Location_Reference()
     * @uses Safety_Incident_LocationType::setSafety_Incident_Location_Data()
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null, \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data = null)
    {
        $this
            ->setSafety_Incident_Location_Reference($safety_Incident_Location_Reference)
            ->setSafety_Incident_Location_Data($safety_Incident_Location_Data);
    }
    /**
     * Get Safety_Incident_Location_Reference value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType|null
     */
    public function getSafety_Incident_Location_Reference()
    {
        return $this->Safety_Incident_Location_Reference;
    }
    /**
     * Set Safety_Incident_Location_Reference value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationType
     */
    public function setSafety_Incident_Location_Reference(\WorkdayWsdl\\StructType\Safety_Incident_LocationObjectType $safety_Incident_Location_Reference = null)
    {
        $this->Safety_Incident_Location_Reference = $safety_Incident_Location_Reference;
        return $this;
    }
    /**
     * Get Safety_Incident_Location_Data value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType|null
     */
    public function getSafety_Incident_Location_Data()
    {
        return $this->Safety_Incident_Location_Data;
    }
    /**
     * Set Safety_Incident_Location_Data value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationType
     */
    public function setSafety_Incident_Location_Data(\WorkdayWsdl\\StructType\Safety_Incident_Location_DataType $safety_Incident_Location_Data = null)
    {
        $this->Safety_Incident_Location_Data = $safety_Incident_Location_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_LocationType
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
