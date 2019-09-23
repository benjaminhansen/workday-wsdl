<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maintain_Contact_Information_for_Person_Event_RequestType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Operation allowing the addition of contact information for a person
 * @subpackage Structs
 */
class Maintain_Contact_Information_for_Person_Event_RequestType extends AbstractStructBase
{
    /**
     * The Business_Process_Parameters
     * Meta information extracted from the WSDL
     * - documentation: Container for the processing options for a business process. If no options are submitted (or the options are submitted as 'false') then the business process is simply initiated as if it where submitted on-line with approvals,
     * reviews, notifications and to-do's in place.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Business_Process_ParametersType
     */
    public $Business_Process_Parameters;
    /**
     * The Maintain_Contact_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for the Maintain Contact Information for Person business process web service
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType
     */
    public $Maintain_Contact_Information_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Maintain_Contact_Information_for_Person_Event_RequestType
     * @uses Maintain_Contact_Information_for_Person_Event_RequestType::setBusiness_Process_Parameters()
     * @uses Maintain_Contact_Information_for_Person_Event_RequestType::setMaintain_Contact_Information_Data()
     * @uses Maintain_Contact_Information_for_Person_Event_RequestType::setAdd_Only()
     * @uses Maintain_Contact_Information_for_Person_Event_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters
     * @param \WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType $maintain_Contact_Information_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null, \WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType $maintain_Contact_Information_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setBusiness_Process_Parameters($business_Process_Parameters)
            ->setMaintain_Contact_Information_Data($maintain_Contact_Information_Data)
            ->setAdd_Only($add_Only)
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
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_RequestType
     */
    public function setBusiness_Process_Parameters(\WorkdayWsdl\\StructType\Business_Process_ParametersType $business_Process_Parameters = null)
    {
        $this->Business_Process_Parameters = $business_Process_Parameters;
        return $this;
    }
    /**
     * Get Maintain_Contact_Information_Data value
     * @return \WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType|null
     */
    public function getMaintain_Contact_Information_Data()
    {
        return $this->Maintain_Contact_Information_Data;
    }
    /**
     * Set Maintain_Contact_Information_Data value
     * @param \WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType $maintain_Contact_Information_Data
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_RequestType
     */
    public function setMaintain_Contact_Information_Data(\WorkdayWsdl\\StructType\Contact_Information_for_Person_Event_DataType $maintain_Contact_Information_Data = null)
    {
        $this->Maintain_Contact_Information_Data = $maintain_Contact_Information_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_RequestType
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
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_RequestType
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
