<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Appointment_Specialty_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Appointment Specialty Request
 * @subpackage Structs
 */
class Put_Appointment_Specialty_RequestType extends AbstractStructBase
{
    /**
     * The Appointment_Specialty_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Appointment Specialty. Used to identify the Appointment Specialty to update. Leave blank on an Add.
     * - minOccurs: 0
     * @var \StructType\Appointment_SpecialtyObjectType
     */
    public $Appointment_Specialty_Reference;
    /**
     * The Appointment_Specialty_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for Appointment Specialty
     * @var \StructType\Appointment_Specialty_DataType
     */
    public $Appointment_Specialty_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Appointment_Specialty_RequestType
     * @uses Put_Appointment_Specialty_RequestType::setAppointment_Specialty_Reference()
     * @uses Put_Appointment_Specialty_RequestType::setAppointment_Specialty_Data()
     * @uses Put_Appointment_Specialty_RequestType::setAdd_Only()
     * @uses Put_Appointment_Specialty_RequestType::setVersion()
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @param \StructType\Appointment_Specialty_DataType $appointment_Specialty_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null, \StructType\Appointment_Specialty_DataType $appointment_Specialty_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setAppointment_Specialty_Reference($appointment_Specialty_Reference)
            ->setAppointment_Specialty_Data($appointment_Specialty_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Appointment_Specialty_Reference value
     * @return \StructType\Appointment_SpecialtyObjectType|null
     */
    public function getAppointment_Specialty_Reference()
    {
        return $this->Appointment_Specialty_Reference;
    }
    /**
     * Set Appointment_Specialty_Reference value
     * @param \StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference
     * @return \StructType\Put_Appointment_Specialty_RequestType
     */
    public function setAppointment_Specialty_Reference(\StructType\Appointment_SpecialtyObjectType $appointment_Specialty_Reference = null)
    {
        $this->Appointment_Specialty_Reference = $appointment_Specialty_Reference;
        return $this;
    }
    /**
     * Get Appointment_Specialty_Data value
     * @return \StructType\Appointment_Specialty_DataType|null
     */
    public function getAppointment_Specialty_Data()
    {
        return $this->Appointment_Specialty_Data;
    }
    /**
     * Set Appointment_Specialty_Data value
     * @param \StructType\Appointment_Specialty_DataType $appointment_Specialty_Data
     * @return \StructType\Put_Appointment_Specialty_RequestType
     */
    public function setAppointment_Specialty_Data(\StructType\Appointment_Specialty_DataType $appointment_Specialty_Data = null)
    {
        $this->Appointment_Specialty_Data = $appointment_Specialty_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \StructType\Put_Appointment_Specialty_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \StructType\Put_Appointment_Specialty_RequestType
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
     * @return \StructType\Put_Appointment_Specialty_RequestType
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
