<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Appointment_Specialty_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Appointment Specialty Response
 * @subpackage Structs
 */
class Put_Appointment_Specialty_ResponseType extends AbstractStructBase
{
    /**
     * The Appointment_Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Appointment Specialty Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType
     */
    public $Appointment_Specialty_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Appointment_Specialty_ResponseType
     * @uses Put_Appointment_Specialty_ResponseType::setAppointment_Specialty_Reference()
     * @uses Put_Appointment_Specialty_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null, $version = null)
    {
        $this
            ->setAppointment_Specialty_Reference($appointment_Specialty_Reference)
            ->setVersion($version);
    }
    /**
     * Get Appointment_Specialty_Reference value
     * @return \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType|null
     */
    public function getAppointment_Specialty_Reference()
    {
        return $this->Appointment_Specialty_Reference;
    }
    /**
     * Set Appointment_Specialty_Reference value
     * @param \WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @return \WorkdayWsdl\\StructType\Put_Appointment_Specialty_ResponseType
     */
    public function setAppointment_Specialty_Reference(\WorkdayWsdl\\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null)
    {
        $this->Appointment_Specialty_Reference = $appointment_Specialty_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Appointment_Specialty_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Appointment_Specialty_ResponseType
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
