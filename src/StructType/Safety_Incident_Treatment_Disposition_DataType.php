<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Safety_Incident_Treatment_Disposition_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The treatment documentation for the injury illness.
 * @subpackage Structs
 */
class Safety_Incident_Treatment_Disposition_DataType extends AbstractStructBase
{
    /**
     * The Health_Treatment_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The health treatment type for the injury illness.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType
     */
    public $Health_Treatment_Type_Reference;
    /**
     * The Health_Treatment_Date
     * Meta information extracted from the WSDL
     * - documentation: The date of the health treatment.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Health_Treatment_Date;
    /**
     * The Health_Facility_Reference
     * Meta information extracted from the WSDL
     * - documentation: The health facility for the treatment.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Health_FacilityObjectType
     */
    public $Health_Facility_Reference;
    /**
     * The Health_Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The health worker for the treatment.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Health_WorkerObjectType
     */
    public $Health_Worker_Reference;
    /**
     * Constructor method for Safety_Incident_Treatment_Disposition_DataType
     * @uses Safety_Incident_Treatment_Disposition_DataType::setHealth_Treatment_Type_Reference()
     * @uses Safety_Incident_Treatment_Disposition_DataType::setHealth_Treatment_Date()
     * @uses Safety_Incident_Treatment_Disposition_DataType::setHealth_Facility_Reference()
     * @uses Safety_Incident_Treatment_Disposition_DataType::setHealth_Worker_Reference()
     * @param \WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType $health_Treatment_Type_Reference
     * @param string $health_Treatment_Date
     * @param \WorkdayWsdl\\StructType\Health_FacilityObjectType $health_Facility_Reference
     * @param \WorkdayWsdl\\StructType\Health_WorkerObjectType $health_Worker_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType $health_Treatment_Type_Reference = null, $health_Treatment_Date = null, \WorkdayWsdl\\StructType\Health_FacilityObjectType $health_Facility_Reference = null, \WorkdayWsdl\\StructType\Health_WorkerObjectType $health_Worker_Reference = null)
    {
        $this
            ->setHealth_Treatment_Type_Reference($health_Treatment_Type_Reference)
            ->setHealth_Treatment_Date($health_Treatment_Date)
            ->setHealth_Facility_Reference($health_Facility_Reference)
            ->setHealth_Worker_Reference($health_Worker_Reference);
    }
    /**
     * Get Health_Treatment_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType|null
     */
    public function getHealth_Treatment_Type_Reference()
    {
        return $this->Health_Treatment_Type_Reference;
    }
    /**
     * Set Health_Treatment_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType $health_Treatment_Type_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType
     */
    public function setHealth_Treatment_Type_Reference(\WorkdayWsdl\\StructType\Health_Treatment_TypeObjectType $health_Treatment_Type_Reference = null)
    {
        $this->Health_Treatment_Type_Reference = $health_Treatment_Type_Reference;
        return $this;
    }
    /**
     * Get Health_Treatment_Date value
     * @return string|null
     */
    public function getHealth_Treatment_Date()
    {
        return $this->Health_Treatment_Date;
    }
    /**
     * Set Health_Treatment_Date value
     * @param string $health_Treatment_Date
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType
     */
    public function setHealth_Treatment_Date($health_Treatment_Date = null)
    {
        // validation for constraint: string
        if (!is_null($health_Treatment_Date) && !is_string($health_Treatment_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($health_Treatment_Date, true), gettype($health_Treatment_Date)), __LINE__);
        }
        $this->Health_Treatment_Date = $health_Treatment_Date;
        return $this;
    }
    /**
     * Get Health_Facility_Reference value
     * @return \WorkdayWsdl\\StructType\Health_FacilityObjectType|null
     */
    public function getHealth_Facility_Reference()
    {
        return $this->Health_Facility_Reference;
    }
    /**
     * Set Health_Facility_Reference value
     * @param \WorkdayWsdl\\StructType\Health_FacilityObjectType $health_Facility_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType
     */
    public function setHealth_Facility_Reference(\WorkdayWsdl\\StructType\Health_FacilityObjectType $health_Facility_Reference = null)
    {
        $this->Health_Facility_Reference = $health_Facility_Reference;
        return $this;
    }
    /**
     * Get Health_Worker_Reference value
     * @return \WorkdayWsdl\\StructType\Health_WorkerObjectType|null
     */
    public function getHealth_Worker_Reference()
    {
        return $this->Health_Worker_Reference;
    }
    /**
     * Set Health_Worker_Reference value
     * @param \WorkdayWsdl\\StructType\Health_WorkerObjectType $health_Worker_Reference
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType
     */
    public function setHealth_Worker_Reference(\WorkdayWsdl\\StructType\Health_WorkerObjectType $health_Worker_Reference = null)
    {
        $this->Health_Worker_Reference = $health_Worker_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Treatment_Disposition_DataType
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
