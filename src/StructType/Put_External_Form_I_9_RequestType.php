<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_External_Form_I-9_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The element containing all necessary information to put/get an External Form I-9 for a Worker.
 * @subpackage Structs
 */
class Put_External_Form_I_9_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The External_Form_I_9_Data
     * Meta information extracted from the WSDL
     * - documentation: The element containing all necessary information to put/get an External Form I-9 for a Worker.
     * @var \WorkdayWsdl\\StructType\External_Form_I_9_DataType
     */
    public $External_Form_I_9_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_External_Form_I-9_RequestType
     * @uses Put_External_Form_I_9_RequestType::setBusiness_Process_Parameters()
     * @uses Put_External_Form_I_9_RequestType::setExternal_Form_I_9_Data()
     * @uses Put_External_Form_I_9_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\External_Form_I_9_DataType $external_Form_I_9_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\External_Form_I_9_DataType $external_Form_I_9_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setExternal_Form_I_9_Data($external_Form_I_9_Data)
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
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get external_Form_I_Data value
     * @return external_Form_I_Data
     */
    public function getExternal_Form_I_9_Data()
    {
        return $this->{'External_Form_I-9_Data'};
    }
    /**
     * Set external_Form_I_Data value
     * @param external_Form_I_Data $external_Form_I_Data
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_RequestType
     */
    public function setExternal_Form_I_9_Data(\WorkdayWsdl\\StructType\External_Form_I_9_DataType $external_Form_I_9_Data = null)
    {
        $this->External_Form_I_9_Data = $this->{'External_Form_I-9_Data'} = $external_Form_I_9_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_External_Form_I_9_RequestType
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
