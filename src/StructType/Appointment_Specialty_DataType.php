<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Appointment_Specialty_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Appointment Specialty
 * @subpackage Structs
 */
class Appointment_Specialty_DataType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for the appointment specialty. If not entered, one will be generated.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to Specialty
     * @var \WorkdayWsdl\\StructType\SpecialtyObjectType
     */
    public $Specialty_Reference;
    /**
     * The Academic_Unit_or_Academic_Unit_Hierarchy_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Unit or Academic Unit Hierarchy Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType
     */
    public $Academic_Unit_or_Academic_Unit_Hierarchy_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: A boolean flag to disable this appointment specialty from being assigned to any appointment
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Appointment_Specialty_DataType
     * @uses Appointment_Specialty_DataType::setID()
     * @uses Appointment_Specialty_DataType::setSpecialty_Reference()
     * @uses Appointment_Specialty_DataType::setAcademic_Unit_or_Academic_Unit_Hierarchy_Reference()
     * @uses Appointment_Specialty_DataType::setInactive()
     * @param string $iD
     * @param \WorkdayWsdl\\StructType\SpecialtyObjectType $specialty_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType $academic_Unit_or_Academic_Unit_Hierarchy_Reference
     * @param bool $inactive
     */
    public function __construct($iD = null, \WorkdayWsdl\\StructType\SpecialtyObjectType $specialty_Reference = null, \WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType $academic_Unit_or_Academic_Unit_Hierarchy_Reference = null, $inactive = null)
    {
        $this
            ->setID($iD)
            ->setSpecialty_Reference($specialty_Reference)
            ->setAcademic_Unit_or_Academic_Unit_Hierarchy_Reference($academic_Unit_or_Academic_Unit_Hierarchy_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Specialty_Reference value
     * @return \WorkdayWsdl\\StructType\SpecialtyObjectType|null
     */
    public function getSpecialty_Reference()
    {
        return $this->Specialty_Reference;
    }
    /**
     * Set Specialty_Reference value
     * @param \WorkdayWsdl\\StructType\SpecialtyObjectType $specialty_Reference
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_DataType
     */
    public function setSpecialty_Reference(\WorkdayWsdl\\StructType\SpecialtyObjectType $specialty_Reference = null)
    {
        $this->Specialty_Reference = $specialty_Reference;
        return $this;
    }
    /**
     * Get Academic_Unit_or_Academic_Unit_Hierarchy_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType|null
     */
    public function getAcademic_Unit_or_Academic_Unit_Hierarchy_Reference()
    {
        return $this->Academic_Unit_or_Academic_Unit_Hierarchy_Reference;
    }
    /**
     * Set Academic_Unit_or_Academic_Unit_Hierarchy_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType $academic_Unit_or_Academic_Unit_Hierarchy_Reference
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_DataType
     */
    public function setAcademic_Unit_or_Academic_Unit_Hierarchy_Reference(\WorkdayWsdl\\StructType\Academic_Appointment_SetObjectType $academic_Unit_or_Academic_Unit_Hierarchy_Reference = null)
    {
        $this->Academic_Unit_or_Academic_Unit_Hierarchy_Reference = $academic_Unit_or_Academic_Unit_Hierarchy_Reference;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Appointment_Specialty_DataType
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
