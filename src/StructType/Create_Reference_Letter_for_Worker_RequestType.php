<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Create_Reference_Letter_for_Worker_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Create Reference Letter for Worker Request Element
 * @subpackage Structs
 */
class Create_Reference_Letter_for_Worker_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Reference_Letter_Event_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Reference_Letter_Event_DataType
     */
    public $Reference_Letter_Event_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Create_Reference_Letter_for_Worker_RequestType
     * @uses Create_Reference_Letter_for_Worker_RequestType::setBusiness_Process_Parameters()
     * @uses Create_Reference_Letter_for_Worker_RequestType::setReference_Letter_Event_Data()
     * @uses Create_Reference_Letter_for_Worker_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Reference_Letter_Event_DataType $reference_Letter_Event_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Reference_Letter_Event_DataType $reference_Letter_Event_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setReference_Letter_Event_Data($reference_Letter_Event_Data)
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
     * @return \WorkdayWsdl\\StructType\Create_Reference_Letter_for_Worker_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Reference_Letter_Event_Data value
     * @return \WorkdayWsdl\\StructType\Reference_Letter_Event_DataType|null
     */
    public function getReference_Letter_Event_Data()
    {
        return $this->Reference_Letter_Event_Data;
    }
    /**
     * Set Reference_Letter_Event_Data value
     * @param \WorkdayWsdl\\StructType\Reference_Letter_Event_DataType $reference_Letter_Event_Data
     * @return \WorkdayWsdl\\StructType\Create_Reference_Letter_for_Worker_RequestType
     */
    public function setReference_Letter_Event_Data(\WorkdayWsdl\\StructType\Reference_Letter_Event_DataType $reference_Letter_Event_Data = null)
    {
        $this->Reference_Letter_Event_Data = $reference_Letter_Event_Data;
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
     * @return \WorkdayWsdl\\StructType\Create_Reference_Letter_for_Worker_RequestType
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
     * @return \WorkdayWsdl\\StructType\Create_Reference_Letter_for_Worker_RequestType
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
