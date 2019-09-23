<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Work_Space_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This web service allows updates to the work space location of a filled Position.
 * @subpackage Structs
 */
class Change_Work_Space_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Work_Space_Change_Event_Data
     * @var \StructType\Work_Space_Change_Event_DataType
     */
    public $Work_Space_Change_Event_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Work_Space_RequestType
     * @uses Change_Work_Space_RequestType::setBusiness_Process_Parameters()
     * @uses Change_Work_Space_RequestType::setWork_Space_Change_Event_Data()
     * @uses Change_Work_Space_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Work_Space_Change_Event_DataType $work_Space_Change_Event_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Work_Space_Change_Event_DataType $work_Space_Change_Event_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setWork_Space_Change_Event_Data($work_Space_Change_Event_Data)
            ->setVersion($version);
    }
    /**
     * Get Business_Process_Parameters value
     * @return \StructType\Business_Process_ParametersType|null
     */
    public function getBusiness_Process_Parameters()
    {
        return $this->Business_Process_Parameters;
    }
    /**
     * Set Business_Process_Parameters value
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @return \StructType\Change_Work_Space_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Work_Space_Change_Event_Data value
     * @return \StructType\Work_Space_Change_Event_DataType|null
     */
    public function getWork_Space_Change_Event_Data()
    {
        return $this->Work_Space_Change_Event_Data;
    }
    /**
     * Set Work_Space_Change_Event_Data value
     * @param \StructType\Work_Space_Change_Event_DataType $work_Space_Change_Event_Data
     * @return \StructType\Change_Work_Space_RequestType
     */
    public function setWork_Space_Change_Event_Data(\StructType\Work_Space_Change_Event_DataType $work_Space_Change_Event_Data = null)
    {
        $this->Work_Space_Change_Event_Data = $work_Space_Change_Event_Data;
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
     * @return \StructType\Change_Work_Space_RequestType
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
     * @return \StructType\Change_Work_Space_RequestType
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
