<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Background_Check_Status_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: If packages are configured, you won't be able to jump directly into change background check status. | This web service operation is designed to update an employee's background check status.
 * @subpackage Structs
 */
class Change_Background_Check_Status_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Background_Check_Status_Data
     * @var \WorkdayWsdl\\StructType\Background_Check_Event_DataType
     */
    public $Background_Check_Status_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Background_Check_Status_RequestType
     * @uses Change_Background_Check_Status_RequestType::setBusiness_Process_Parameters()
     * @uses Change_Background_Check_Status_RequestType::setBackground_Check_Status_Data()
     * @uses Change_Background_Check_Status_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Background_Check_Event_DataType $background_Check_Status_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Background_Check_Event_DataType $background_Check_Status_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setBackground_Check_Status_Data($background_Check_Status_Data)
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
     * @return \WorkdayWsdl\\StructType\Change_Background_Check_Status_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Background_Check_Status_Data value
     * @return \WorkdayWsdl\\StructType\Background_Check_Event_DataType|null
     */
    public function getBackground_Check_Status_Data()
    {
        return $this->Background_Check_Status_Data;
    }
    /**
     * Set Background_Check_Status_Data value
     * @param \WorkdayWsdl\\StructType\Background_Check_Event_DataType $background_Check_Status_Data
     * @return \WorkdayWsdl\\StructType\Change_Background_Check_Status_RequestType
     */
    public function setBackground_Check_Status_Data(\WorkdayWsdl\\StructType\Background_Check_Event_DataType $background_Check_Status_Data = null)
    {
        $this->Background_Check_Status_Data = $background_Check_Status_Data;
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
     * @return \WorkdayWsdl\\StructType\Change_Background_Check_Status_RequestType
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
     * @return \WorkdayWsdl\\StructType\Change_Background_Check_Status_RequestType
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
