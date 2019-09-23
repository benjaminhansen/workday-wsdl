<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Licenses_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This web service allows the updating of license identifiers for a worker.
 * @subpackage Structs
 */
class Change_Licenses_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Change_Licenses_Data
     * @var \StructType\Change_Licenses_Business_Process_DataType
     */
    public $Change_Licenses_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Licenses_RequestType
     * @uses Change_Licenses_RequestType::setBusiness_Process_Parameters()
     * @uses Change_Licenses_RequestType::setChange_Licenses_Data()
     * @uses Change_Licenses_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Change_Licenses_Business_Process_DataType $change_Licenses_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Change_Licenses_Business_Process_DataType $change_Licenses_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setChange_Licenses_Data($change_Licenses_Data)
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
     * @return \StructType\Change_Licenses_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Change_Licenses_Data value
     * @return \StructType\Change_Licenses_Business_Process_DataType|null
     */
    public function getChange_Licenses_Data()
    {
        return $this->Change_Licenses_Data;
    }
    /**
     * Set Change_Licenses_Data value
     * @param \StructType\Change_Licenses_Business_Process_DataType $change_Licenses_Data
     * @return \StructType\Change_Licenses_RequestType
     */
    public function setChange_Licenses_Data(\StructType\Change_Licenses_Business_Process_DataType $change_Licenses_Data = null)
    {
        $this->Change_Licenses_Data = $change_Licenses_Data;
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
     * @return \StructType\Change_Licenses_RequestType
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
     * @return \StructType\Change_Licenses_RequestType
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
