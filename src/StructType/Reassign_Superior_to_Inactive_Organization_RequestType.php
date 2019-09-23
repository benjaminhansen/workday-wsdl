<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reassign_Superior_to_Inactive_Organization_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides ability to assign the previous superior to an organization that is currently inactive and does not currently have a superior.
 * @subpackage Structs
 */
class Reassign_Superior_to_Inactive_Organization_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Container for the processing options for a business process. If no options are submitted (or the options are submitted as 'false') then the business process is simply initiated as if it where submitted on-line with approvals,
     * reviews, notifications and to-do's in place. If the Initiator is an Integration System User, any validations you configured on the Initiation step are ignored.
     * - minOccurs: 0
     * @var \StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Reassign_Superior_to_Inactive_Organization_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Reassign Superior to Inactive Organization web service operation.
     * @var \StructType\Reassign_Superior_to_Inactive_Organization_DataType
     */
    public $Reassign_Superior_to_Inactive_Organization_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Reassign_Superior_to_Inactive_Organization_RequestType
     * @uses Reassign_Superior_to_Inactive_Organization_RequestType::setBusiness_Process_Parameters()
     * @uses Reassign_Superior_to_Inactive_Organization_RequestType::setReassign_Superior_to_Inactive_Organization_Data()
     * @uses Reassign_Superior_to_Inactive_Organization_RequestType::setVersion()
     * @param \StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \StructType\Reassign_Superior_to_Inactive_Organization_DataType $reassign_Superior_to_Inactive_Organization_Data
     * @param string $version
     */
    public function __construct(\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \StructType\Reassign_Superior_to_Inactive_Organization_DataType $reassign_Superior_to_Inactive_Organization_Data = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setReassign_Superior_to_Inactive_Organization_Data($reassign_Superior_to_Inactive_Organization_Data)
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
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_RequestType
     */
    public function setBusiness_Process_Parameters(\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Reassign_Superior_to_Inactive_Organization_Data value
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_DataType|null
     */
    public function getReassign_Superior_to_Inactive_Organization_Data()
    {
        return $this->Reassign_Superior_to_Inactive_Organization_Data;
    }
    /**
     * Set Reassign_Superior_to_Inactive_Organization_Data value
     * @param \StructType\Reassign_Superior_to_Inactive_Organization_DataType $reassign_Superior_to_Inactive_Organization_Data
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_RequestType
     */
    public function setReassign_Superior_to_Inactive_Organization_Data(\StructType\Reassign_Superior_to_Inactive_Organization_DataType $reassign_Superior_to_Inactive_Organization_Data = null)
    {
        $this->Reassign_Superior_to_Inactive_Organization_Data = $reassign_Superior_to_Inactive_Organization_Data;
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
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_RequestType
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
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_RequestType
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
