<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Edit_Named_Professorship_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Edit Named Professorship Event Request
 * @subpackage Structs
 */
class Edit_Named_Professorship_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Parameters for Edit Named Professorship Business Process Parms
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Edit_Named_Professorship_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper for Edit Named Professorship Request Data
     * @var \StructType\Edit_Named_Professorship_DataType
     */
    public $Edit_Named_Professorship_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Edit_Named_Professorship_RequestType
     * @uses Edit_Named_Professorship_RequestType::setBusiness_Process_Parameters()
     * @uses Edit_Named_Professorship_RequestType::setEdit_Named_Professorship_Data()
     * @uses Edit_Named_Professorship_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Edit_Named_Professorship_DataType $edit_Named_Professorship_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Edit_Named_Professorship_DataType $edit_Named_Professorship_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setEdit_Named_Professorship_Data($edit_Named_Professorship_Data)
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
     * @return \StructType\Edit_Named_Professorship_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Edit_Named_Professorship_Data value
     * @return \StructType\Edit_Named_Professorship_DataType|null
     */
    public function getEdit_Named_Professorship_Data()
    {
        return $this->Edit_Named_Professorship_Data;
    }
    /**
     * Set Edit_Named_Professorship_Data value
     * @param \StructType\Edit_Named_Professorship_DataType $edit_Named_Professorship_Data
     * @return \StructType\Edit_Named_Professorship_RequestType
     */
    public function setEdit_Named_Professorship_Data(\StructType\Edit_Named_Professorship_DataType $edit_Named_Professorship_Data = null)
    {
        $this->Edit_Named_Professorship_Data = $edit_Named_Professorship_Data;
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
     * @return \StructType\Edit_Named_Professorship_RequestType
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
     * @return \StructType\Edit_Named_Professorship_RequestType
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
