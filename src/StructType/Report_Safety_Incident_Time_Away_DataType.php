<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Report_Safety_Incident_Time_Away_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data about time away for the involved party.
 * @subpackage Structs
 */
class Report_Safety_Incident_Time_Away_DataType extends AbstractStructBase
{
    /**
     * The Safety_Incident_Time_Away_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of time away that occurred.
     * @var \WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType
     */
    public $Safety_Incident_Time_Away_Type_Reference;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: The date that the time away started.
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The Proposed_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The proposed end date for the time away.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Proposed_End_Date;
    /**
     * The Actual_End_Date
     * Meta information extracted from the WSDL
     * - documentation: The actual end date of the time away.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Actual_End_Date;
    /**
     * Constructor method for Report_Safety_Incident_Time_Away_DataType
     * @uses Report_Safety_Incident_Time_Away_DataType::setSafety_Incident_Time_Away_Type_Reference()
     * @uses Report_Safety_Incident_Time_Away_DataType::setStart_Date()
     * @uses Report_Safety_Incident_Time_Away_DataType::setProposed_End_Date()
     * @uses Report_Safety_Incident_Time_Away_DataType::setActual_End_Date()
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType $safety_Incident_Time_Away_Type_Reference
     * @param string $start_Date
     * @param string $proposed_End_Date
     * @param string $actual_End_Date
     */
    public function __construct(\WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType $safety_Incident_Time_Away_Type_Reference = null, $start_Date = null, $proposed_End_Date = null, $actual_End_Date = null)
    {
        $this
            ->setSafety_Incident_Time_Away_Type_Reference($safety_Incident_Time_Away_Type_Reference)
            ->setStart_Date($start_Date)
            ->setProposed_End_Date($proposed_End_Date)
            ->setActual_End_Date($actual_End_Date);
    }
    /**
     * Get Safety_Incident_Time_Away_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType|null
     */
    public function getSafety_Incident_Time_Away_Type_Reference()
    {
        return $this->Safety_Incident_Time_Away_Type_Reference;
    }
    /**
     * Set Safety_Incident_Time_Away_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType $safety_Incident_Time_Away_Type_Reference
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType
     */
    public function setSafety_Incident_Time_Away_Type_Reference(\WorkdayWsdl\\StructType\Safety_Incident_Time_Away_TypeObjectType $safety_Incident_Time_Away_Type_Reference = null)
    {
        $this->Safety_Incident_Time_Away_Type_Reference = $safety_Incident_Time_Away_Type_Reference;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get Proposed_End_Date value
     * @return string|null
     */
    public function getProposed_End_Date()
    {
        return $this->Proposed_End_Date;
    }
    /**
     * Set Proposed_End_Date value
     * @param string $proposed_End_Date
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType
     */
    public function setProposed_End_Date($proposed_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($proposed_End_Date) && !is_string($proposed_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposed_End_Date, true), gettype($proposed_End_Date)), __LINE__);
        }
        $this->Proposed_End_Date = $proposed_End_Date;
        return $this;
    }
    /**
     * Get Actual_End_Date value
     * @return string|null
     */
    public function getActual_End_Date()
    {
        return $this->Actual_End_Date;
    }
    /**
     * Set Actual_End_Date value
     * @param string $actual_End_Date
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType
     */
    public function setActual_End_Date($actual_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($actual_End_Date) && !is_string($actual_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actual_End_Date, true), gettype($actual_End_Date)), __LINE__);
        }
        $this->Actual_End_Date = $actual_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Report_Safety_Incident_Time_Away_DataType
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
