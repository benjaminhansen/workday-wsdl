<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information to manually assign an establishment to a worker position
 * @subpackage Structs
 */
class Assign_Establishment_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Assign_Establishment_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Assign_Establishment_DataType
     */
    public $Assign_Establishment_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Establishment_RequestType
     * @uses Assign_Establishment_RequestType::setBusiness_Process_Parameters()
     * @uses Assign_Establishment_RequestType::setAssign_Establishment_Data()
     * @uses Assign_Establishment_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_DataType $assign_Establishment_Data
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Assign_Establishment_DataType $assign_Establishment_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setAssign_Establishment_Data($assign_Establishment_Data)
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
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Assign_Establishment_Data value
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_DataType|null
     */
    public function getAssign_Establishment_Data()
    {
        return $this->Assign_Establishment_Data;
    }
    /**
     * Set Assign_Establishment_Data value
     * @param \WorkdayWsdl\\StructType\Assign_Establishment_DataType $assign_Establishment_Data
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_RequestType
     */
    public function setAssign_Establishment_Data(\WorkdayWsdl\\StructType\Assign_Establishment_DataType $assign_Establishment_Data = null)
    {
        $this->Assign_Establishment_Data = $assign_Establishment_Data;
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
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_RequestType
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
     * @return \WorkdayWsdl\\StructType\Assign_Establishment_RequestType
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
