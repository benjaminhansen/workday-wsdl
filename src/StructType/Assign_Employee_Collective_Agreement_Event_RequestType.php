<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Employee_Collective_Agreement_Event_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element consisting of Business Process Parameters and element with Worker and Collective Agreement details
 * @subpackage Structs
 */
class Assign_Employee_Collective_Agreement_Event_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Business process parameters
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Assign_Employee_Collective_Agreement_Event_Data
     * Meta information extracted from the WSDL
     * - documentation: Worker, Position, Effective Date and Collective Agreement data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType
     */
    public $Assign_Employee_Collective_Agreement_Event_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Employee_Collective_Agreement_Event_RequestType
     * @uses Assign_Employee_Collective_Agreement_Event_RequestType::setBusiness_Process_Parameters()
     * @uses Assign_Employee_Collective_Agreement_Event_RequestType::setAssign_Employee_Collective_Agreement_Event_Data()
     * @uses Assign_Employee_Collective_Agreement_Event_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType $assign_Employee_Collective_Agreement_Event_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType $assign_Employee_Collective_Agreement_Event_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setAssign_Employee_Collective_Agreement_Event_Data($assign_Employee_Collective_Agreement_Event_Data)
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
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Assign_Employee_Collective_Agreement_Event_Data value
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType|null
     */
    public function getAssign_Employee_Collective_Agreement_Event_Data()
    {
        return $this->Assign_Employee_Collective_Agreement_Event_Data;
    }
    /**
     * Set Assign_Employee_Collective_Agreement_Event_Data value
     * @param \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType $assign_Employee_Collective_Agreement_Event_Data
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType
     */
    public function setAssign_Employee_Collective_Agreement_Event_Data(\WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_DataType $assign_Employee_Collective_Agreement_Event_Data = null)
    {
        $this->Assign_Employee_Collective_Agreement_Event_Data = $assign_Employee_Collective_Agreement_Event_Data;
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
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType
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
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_RequestType
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
