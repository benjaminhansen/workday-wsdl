<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for End_Collective_Agreement_Assignment_Event_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element consisting of Business Process Parameters and element with End Collective Agreement Assignment details
 * @subpackage Structs
 */
class End_Collective_Agreement_Assignment_Event_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Business process parameters
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The End_Collective_Agreement_Assignment_Data
     * Meta information extracted from the WSDL
     * - documentation: Worker, Position, and Effective Date data
     * - minOccurs: 0
     * @var \StructType\End_Collective_Agreement_Assignment_Event_DataType
     */
    public $End_Collective_Agreement_Assignment_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for End_Collective_Agreement_Assignment_Event_RequestType
     * @uses End_Collective_Agreement_Assignment_Event_RequestType::setBusiness_Process_Parameters()
     * @uses End_Collective_Agreement_Assignment_Event_RequestType::setEnd_Collective_Agreement_Assignment_Data()
     * @uses End_Collective_Agreement_Assignment_Event_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\End_Collective_Agreement_Assignment_Event_DataType $end_Collective_Agreement_Assignment_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\End_Collective_Agreement_Assignment_Event_DataType $end_Collective_Agreement_Assignment_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setEnd_Collective_Agreement_Assignment_Data($end_Collective_Agreement_Assignment_Data)
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
     * @return \StructType\End_Collective_Agreement_Assignment_Event_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get End_Collective_Agreement_Assignment_Data value
     * @return \StructType\End_Collective_Agreement_Assignment_Event_DataType|null
     */
    public function getEnd_Collective_Agreement_Assignment_Data()
    {
        return $this->End_Collective_Agreement_Assignment_Data;
    }
    /**
     * Set End_Collective_Agreement_Assignment_Data value
     * @param \StructType\End_Collective_Agreement_Assignment_Event_DataType $end_Collective_Agreement_Assignment_Data
     * @return \StructType\End_Collective_Agreement_Assignment_Event_RequestType
     */
    public function setEnd_Collective_Agreement_Assignment_Data(\StructType\End_Collective_Agreement_Assignment_Event_DataType $end_Collective_Agreement_Assignment_Data = null)
    {
        $this->End_Collective_Agreement_Assignment_Data = $end_Collective_Agreement_Assignment_Data;
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
     * @return \StructType\End_Collective_Agreement_Assignment_Event_RequestType
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
     * @return \StructType\End_Collective_Agreement_Assignment_Event_RequestType
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
