<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Manage_Committee_Membership_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for the Manage Committee Membership business process web service.
 * @subpackage Structs
 */
class Manage_Committee_Membership_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Manage_Committee_Membership_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper Element for the Manage Committee Membership business process web service.
     * @var \StructType\Manage_Committee_Membership_DataType
     */
    public $Manage_Committee_Membership_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Manage_Committee_Membership_RequestType
     * @uses Manage_Committee_Membership_RequestType::setBusiness_Process_Parameters()
     * @uses Manage_Committee_Membership_RequestType::setManage_Committee_Membership_Data()
     * @uses Manage_Committee_Membership_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Manage_Committee_Membership_DataType $manage_Committee_Membership_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Manage_Committee_Membership_DataType $manage_Committee_Membership_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setManage_Committee_Membership_Data($manage_Committee_Membership_Data)
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
     * @return \StructType\Manage_Committee_Membership_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Manage_Committee_Membership_Data value
     * @return \StructType\Manage_Committee_Membership_DataType|null
     */
    public function getManage_Committee_Membership_Data()
    {
        return $this->Manage_Committee_Membership_Data;
    }
    /**
     * Set Manage_Committee_Membership_Data value
     * @param \StructType\Manage_Committee_Membership_DataType $manage_Committee_Membership_Data
     * @return \StructType\Manage_Committee_Membership_RequestType
     */
    public function setManage_Committee_Membership_Data(\StructType\Manage_Committee_Membership_DataType $manage_Committee_Membership_Data = null)
    {
        $this->Manage_Committee_Membership_Data = $manage_Committee_Membership_Data;
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
     * @return \StructType\Manage_Committee_Membership_RequestType
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
     * @return \StructType\Manage_Committee_Membership_RequestType
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
