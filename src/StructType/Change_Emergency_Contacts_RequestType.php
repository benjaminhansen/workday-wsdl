<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Emergency_Contacts_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This web service allows the updating of emergency contacts for a person
 * @subpackage Structs
 */
class Change_Emergency_Contacts_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Change_Emergency_Contacts_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element to hold the emergency contacts for a person
     * @var \WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType
     */
    public $Change_Emergency_Contacts_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Emergency_Contacts_RequestType
     * @uses Change_Emergency_Contacts_RequestType::setBusiness_Process_Parameters()
     * @uses Change_Emergency_Contacts_RequestType::setChange_Emergency_Contacts_Data()
     * @uses Change_Emergency_Contacts_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType $change_Emergency_Contacts_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType $change_Emergency_Contacts_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setChange_Emergency_Contacts_Data($change_Emergency_Contacts_Data)
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
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Change_Emergency_Contacts_Data value
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType|null
     */
    public function getChange_Emergency_Contacts_Data()
    {
        return $this->Change_Emergency_Contacts_Data;
    }
    /**
     * Set Change_Emergency_Contacts_Data value
     * @param \WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType $change_Emergency_Contacts_Data
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_RequestType
     */
    public function setChange_Emergency_Contacts_Data(\WorkdayWsdl\\StructType\Change_Emergency_Contacts_Business_Process_DataType $change_Emergency_Contacts_Data = null)
    {
        $this->Change_Emergency_Contacts_Data = $change_Emergency_Contacts_Data;
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
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_RequestType
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
     * @return \WorkdayWsdl\\StructType\Change_Emergency_Contacts_RequestType
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
