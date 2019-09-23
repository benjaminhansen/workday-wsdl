<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointment_Track_Custom_Object_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Effective dated additional data for an Academic Appointment Track. When updating custom objects that allow multiple instances, data for existing instances must appear in the request, otherwise it will be removed.
 * @subpackage Structs
 */
class Academic_Appointment_Track_Custom_Object_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective date of the edit additional data request.
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointment Track for edit additional data request.
     * @var \StructType\Academic_Appointment_TrackObjectType
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * The Business_Object_Additional_Data
     * @var \StructType\Effective_Dated_Web_Service_Additional_DataType
     */
    public $Business_Object_Additional_Data;
    /**
     * Constructor method for Academic_Appointment_Track_Custom_Object_DataType
     * @uses Academic_Appointment_Track_Custom_Object_DataType::setEffective_Date()
     * @uses Academic_Appointment_Track_Custom_Object_DataType::setAcademic_Appointment_Track_Reference()
     * @uses Academic_Appointment_Track_Custom_Object_DataType::setBusiness_Object_Additional_Data()
     * @param string $effective_Date
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @param \StructType\Effective_Dated_Web_Service_Additional_DataType $business_Object_Additional_Data
     */
    public function __construct($effective_Date = null, \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null, \StructType\Effective_Dated_Web_Service_Additional_DataType $business_Object_Additional_Data = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference)
            ->setBusiness_Object_Additional_Data($business_Object_Additional_Data);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Academic_Appointment_Track_Custom_Object_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Academic_Appointment_Track_Reference value
     * @return \StructType\Academic_Appointment_TrackObjectType|null
     */
    public function getAcademic_Appointment_Track_Reference()
    {
        return $this->Academic_Appointment_Track_Reference;
    }
    /**
     * Set Academic_Appointment_Track_Reference value
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @return \StructType\Academic_Appointment_Track_Custom_Object_DataType
     */
    public function setAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null)
    {
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
        return $this;
    }
    /**
     * Get Business_Object_Additional_Data value
     * @return \StructType\Effective_Dated_Web_Service_Additional_DataType|null
     */
    public function getBusiness_Object_Additional_Data()
    {
        return $this->Business_Object_Additional_Data;
    }
    /**
     * Set Business_Object_Additional_Data value
     * @param \StructType\Effective_Dated_Web_Service_Additional_DataType $business_Object_Additional_Data
     * @return \StructType\Academic_Appointment_Track_Custom_Object_DataType
     */
    public function setBusiness_Object_Additional_Data(\StructType\Effective_Dated_Web_Service_Additional_DataType $business_Object_Additional_Data = null)
    {
        $this->Business_Object_Additional_Data = $business_Object_Additional_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointment_Track_Custom_Object_DataType
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
