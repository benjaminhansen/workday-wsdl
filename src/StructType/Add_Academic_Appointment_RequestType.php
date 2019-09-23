<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Add_Academic_Appointment_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Top-level request element to add an academic appointment
 * @subpackage Structs
 */
class Add_Academic_Appointment_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Add_Academic_Appointment_Data
     * Meta information extracted from the WSDL
     * - documentation: Add Academic Appointment Request Wrapper for the Add Academic Appointment Web Service
     * @var \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType
     */
    public $Add_Academic_Appointment_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Add_Academic_Appointment_RequestType
     * @uses Add_Academic_Appointment_RequestType::setBusiness_Process_Parameters()
     * @uses Add_Academic_Appointment_RequestType::setAdd_Academic_Appointment_Data()
     * @uses Add_Academic_Appointment_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType $add_Academic_Appointment_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType $add_Academic_Appointment_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setAdd_Academic_Appointment_Data($add_Academic_Appointment_Data)
            ->setVersion($version);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \WorkdayWsdl\\StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Add_Academic_Appointment_Data value
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType|null
     */
    public function getAdd_Academic_Appointment_Data()
    {
        return $this->Add_Academic_Appointment_Data;
    }
    /**
     * Set Add_Academic_Appointment_Data value
     * @param \WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType $add_Academic_Appointment_Data
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_RequestType
     */
    public function setAdd_Academic_Appointment_Data(\WorkdayWsdl\\StructType\Add_Academic_Appointment_DataType $add_Academic_Appointment_Data = null)
    {
        $this->Add_Academic_Appointment_Data = $add_Academic_Appointment_Data;
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
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_RequestType
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
     * @return \WorkdayWsdl\\StructType\Add_Academic_Appointment_RequestType
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
