<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Update_Safety_Incident_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The data required to update a Safety Incident.
 * @subpackage Structs
 */
class Update_Safety_Incident_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Reference
     * Meta information extracted from the WSDL
     * - documentation: Safety Incident that will be updated.
     * @var \StructType\Safety_IncidentObjectType
     */
    public $Safety_Incident_Reference;
    /**
     * The Safety_Incident_Data
     * @var \StructType\Report_Safety_Incident_DataType
     */
    public $Safety_Incident_Data;
    /**
     * Constructor method for Update_Safety_Incident_DataType
     * @uses Update_Safety_Incident_DataType::setSafety_Incident_Reference()
     * @uses Update_Safety_Incident_DataType::setSafety_Incident_Data()
     * @param \StructType\Safety_IncidentObjectType $safety_Incident_Reference
     * @param \StructType\Report_Safety_Incident_DataType $safety_Incident_Data
     */
    public function __construct(\StructType\Safety_IncidentObjectType $safety_Incident_Reference = null, \StructType\Report_Safety_Incident_DataType $safety_Incident_Data = null)
    {
        $this
            ->setSafety_Incident_Reference($safety_Incident_Reference)
            ->setSafety_Incident_Data($safety_Incident_Data);
    }
    /**
     * Get Safety_Incident_Reference value
     * @return \StructType\Safety_IncidentObjectType|null
     */
    public function getSafety_Incident_Reference()
    {
        return $this->Safety_Incident_Reference;
    }
    /**
     * Set Safety_Incident_Reference value
     * @param \StructType\Safety_IncidentObjectType $safety_Incident_Reference
     * @return \StructType\Update_Safety_Incident_DataType
     */
    public function setSafety_Incident_Reference(\StructType\Safety_IncidentObjectType $safety_Incident_Reference = null)
    {
        $this->Safety_Incident_Reference = $safety_Incident_Reference;
        return $this;
    }
    /**
     * Get Safety_Incident_Data value
     * @return \StructType\Report_Safety_Incident_DataType|null
     */
    public function getSafety_Incident_Data()
    {
        return $this->Safety_Incident_Data;
    }
    /**
     * Set Safety_Incident_Data value
     * @param \StructType\Report_Safety_Incident_DataType $safety_Incident_Data
     * @return \StructType\Update_Safety_Incident_DataType
     */
    public function setSafety_Incident_Data(\StructType\Report_Safety_Incident_DataType $safety_Incident_Data = null)
    {
        $this->Safety_Incident_Data = $safety_Incident_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Update_Safety_Incident_DataType
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
