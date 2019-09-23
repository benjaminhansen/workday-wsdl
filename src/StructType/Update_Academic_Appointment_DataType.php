<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Update_Academic_Appointment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the Update Academic Appointment business process.
 * @subpackage Structs
 */
class Update_Academic_Appointment_DataType extends AbstractStructBase
{
    /**
     * The Reason_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the reason for the academic appointment event.
     * @var \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType
     */
    public $Reason_Reference;
    /**
     * The Academic_Appointee_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference ID for the person this academic appointment is for.
     * @var \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType
     */
    public $Academic_Appointee_Reference;
    /**
     * The Academic_Appointment_Data
     * Meta information extracted from the WSDL
     * - documentation: Used to set or update the Reference ID for the Appointment Thread. The value cannot already be in use by a different appointment thread.
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType
     */
    public $Academic_Appointment_Data;
    /**
     * Constructor method for Update_Academic_Appointment_DataType
     * @uses Update_Academic_Appointment_DataType::setReason_Reference()
     * @uses Update_Academic_Appointment_DataType::setAcademic_Appointee_Reference()
     * @uses Update_Academic_Appointment_DataType::setAcademic_Appointment_Data()
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null, \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null, \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data = null)
    {
        $this
            ->setReason_Reference($reason_Reference)
            ->setAcademic_Appointee_Reference($academic_Appointee_Reference)
            ->setAcademic_Appointment_Data($academic_Appointment_Data);
    }
    /**
     * Get Reason_Reference value
     * @return \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType|null
     */
    public function getReason_Reference()
    {
        return $this->Reason_Reference;
    }
    /**
     * Set Reason_Reference value
     * @param \WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference
     * @return \WorkdayWsdl\\StructType\Update_Academic_Appointment_DataType
     */
    public function setReason_Reference(\WorkdayWsdl\\StructType\General_Event_SubcategoryObjectType $reason_Reference = null)
    {
        $this->Reason_Reference = $reason_Reference;
        return $this;
    }
    /**
     * Get Academic_Appointee_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType|null
     */
    public function getAcademic_Appointee_Reference()
    {
        return $this->Academic_Appointee_Reference;
    }
    /**
     * Set Academic_Appointee_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference
     * @return \WorkdayWsdl\\StructType\Update_Academic_Appointment_DataType
     */
    public function setAcademic_Appointee_Reference(\WorkdayWsdl\\StructType\Academic_Appointee_EnabledObjectType $academic_Appointee_Reference = null)
    {
        $this->Academic_Appointee_Reference = $academic_Appointee_Reference;
        return $this;
    }
    /**
     * Get Academic_Appointment_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType|null
     */
    public function getAcademic_Appointment_Data()
    {
        return $this->Academic_Appointment_Data;
    }
    /**
     * Set Academic_Appointment_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data
     * @return \WorkdayWsdl\\StructType\Update_Academic_Appointment_DataType
     */
    public function setAcademic_Appointment_Data(\WorkdayWsdl\\StructType\Academic_Appointment_Snapshot_DataType $academic_Appointment_Data = null)
    {
        $this->Academic_Appointment_Data = $academic_Appointment_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Update_Academic_Appointment_DataType
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
