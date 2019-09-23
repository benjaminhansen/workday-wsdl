<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for End_Academic_Appointment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the End Academic Appointment business process.
 * @subpackage Structs
 */
class End_Academic_Appointment_DataType extends AbstractStructBase
{
    /**
     * The Academic_Appointee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointee Reference with and Appointment Track to be updated
     * - minOccurs: 0
     * @var \StructType\Academic_Appointee_EnabledObjectType
     */
    public $Academic_Appointee_Reference;
    /**
     * The Academic_Appointment_Track_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Academic Appointment Track that is being ended.
     * - minOccurs: 0
     * @var \StructType\Academic_Appointment_TrackObjectType
     */
    public $Academic_Appointment_Track_Reference;
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Reason for the End Academic Appointment business process.
     * @var \StructType\General_Event_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Track_End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date that the Academic Appointment Track is being ended.
     * - maxOccurs: 1
     * @var string
     */
    public $Track_End_Date;
    /**
     * Constructor method for End_Academic_Appointment_DataType
     * @uses End_Academic_Appointment_DataType::setAcademic_Appointee_Reference()
     * @uses End_Academic_Appointment_DataType::setAcademic_Appointment_Track_Reference()
     * @uses End_Academic_Appointment_DataType::setReason_Reference()
     * @uses End_Academic_Appointment_DataType::setTrack_End_Date()
     * @param \StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @param \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference
     * @param \StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @param string $track_End_Date
     */
    public function __construct(\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null, \StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null, \StructType\General_Event_SubcategoryObjectType $reason_Reference = null, $track_End_Date = null)
    {
        $this
            ->setAcademic_Appointee_Reference($academic_Appointee_Reference)
            ->setAcademic_Appointment_Track_Reference($academic_Appointment_Track_Reference)
            ->setReason_Reference($reason_Reference)
            ->setTrack_End_Date($track_End_Date);
    }
    /**
     * Get Academic_Appointee_Reference value
     * @return \StructType\Academic_Appointee_EnabledObjectType|null
     */
    public function getAcademic_Appointee_Reference()
    {
        return $this->Academic_Appointee_Reference;
    }
    /**
     * Set Academic_Appointee_Reference value
     * @param \StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @return \StructType\End_Academic_Appointment_DataType
     */
    public function setAcademic_Appointee_Reference(\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null)
    {
        $this->Academic_Appointee_Reference = $academic_Appointee_Reference;
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
     * @return \StructType\End_Academic_Appointment_DataType
     */
    public function setAcademic_Appointment_Track_Reference(\StructType\Academic_Appointment_TrackObjectType $academic_Appointment_Track_Reference = null)
    {
        $this->Academic_Appointment_Track_Reference = $academic_Appointment_Track_Reference;
        return $this;
    }
    /**
     * Get Reason_Reference value
     * @return \StructType\General_Event_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @return \StructType\End_Academic_Appointment_DataType
     */
    public function setReason_Reference(\StructType\General_Event_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Track_End_Date value
     * @return string|null
     */
    public function getTrack_End_Date()
    {
        return $this->Track_End_Date;
    }
    /**
     * Set Track_End_Date value
     * @param string $track_End_Date
     * @return \StructType\End_Academic_Appointment_DataType
     */
    public function setTrack_End_Date($track_End_Date = null)
    {
        // validation for constraint: string
        if (!is_null($track_End_Date) && !is_string($track_End_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($track_End_Date, true), gettype($track_End_Date)), __LINE__);
        }
        $this->Track_End_Date = $track_End_Date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\End_Academic_Appointment_DataType
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
