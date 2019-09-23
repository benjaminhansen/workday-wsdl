<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Edit_Academic_Appointment_Track_Additional_Data_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level element for editing Academic Appointment Track Additional Data
 * @subpackage Structs
 */
class Edit_Academic_Appointment_Track_Additional_Data_RequestType extends AbstractStructBase
{
    /**
     * The Academic_Appointment_Track_Additional_Data
     * @var \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType
     */
    public $Academic_Appointment_Track_Additional_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Edit_Academic_Appointment_Track_Additional_Data_RequestType
     * @uses Edit_Academic_Appointment_Track_Additional_Data_RequestType::setAcademic_Appointment_Track_Additional_Data()
     * @uses Edit_Academic_Appointment_Track_Additional_Data_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $academic_Appointment_Track_Additional_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $academic_Appointment_Track_Additional_Data = null, $version = null)
    {
        $this
            ->setAcademic_Appointment_Track_Additional_Data($academic_Appointment_Track_Additional_Data)
            ->setVersion($version);
    }
    /**
     * Get Academic_Appointment_Track_Additional_Data value
     * @return \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType|null
     */
    public function getAcademic_Appointment_Track_Additional_Data()
    {
        return $this->Academic_Appointment_Track_Additional_Data;
    }
    /**
     * Set Academic_Appointment_Track_Additional_Data value
     * @param \WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $academic_Appointment_Track_Additional_Data
     * @return \WorkdayWsdl\\StructType\Edit_Academic_Appointment_Track_Additional_Data_RequestType
     */
    public function setAcademic_Appointment_Track_Additional_Data(\WorkdayWsdl\\StructType\Academic_Appointment_Track_Custom_Object_DataType $academic_Appointment_Track_Additional_Data = null)
    {
        $this->Academic_Appointment_Track_Additional_Data = $academic_Appointment_Track_Additional_Data;
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
     * @return \WorkdayWsdl\\StructType\Edit_Academic_Appointment_Track_Additional_Data_RequestType
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
     * @return \WorkdayWsdl\\StructType\Edit_Academic_Appointment_Track_Additional_Data_RequestType
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
