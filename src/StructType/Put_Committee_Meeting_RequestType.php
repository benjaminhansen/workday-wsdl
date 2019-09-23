<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Meeting_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Data for Committee Meeting Web Service Request
 * @subpackage Structs
 */
class Put_Committee_Meeting_RequestType extends AbstractStructBase
{
    /**
     * The Committee_Meeting_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee meeting reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_MeetingObjectType
     */
    public $Committee_Meeting_Reference;
    /**
     * The Committee_Meeting_Data
     * Meta information extracted from the WSDL
     * - documentation: Data for committee meeting
     * @var \WorkdayWsdl\\StructType\Committee_Meeting_DataType
     */
    public $Committee_Meeting_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether the request is for only adding new committee meetings or editing existing committee meetings.
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
     * Constructor method for Put_Committee_Meeting_RequestType
     * @uses Put_Committee_Meeting_RequestType::setCommittee_Meeting_Reference()
     * @uses Put_Committee_Meeting_RequestType::setCommittee_Meeting_Data()
     * @uses Put_Committee_Meeting_RequestType::setAdd_Only()
     * @uses Put_Committee_Meeting_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_DataType $committee_Meeting_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null, \WorkdayWsdl\\StructType\Committee_Meeting_DataType $committee_Meeting_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setCommittee_Meeting_Reference($committee_Meeting_Reference)
            ->setCommittee_Meeting_Data($committee_Meeting_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Committee_Meeting_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_MeetingObjectType|null
     */
    public function getCommittee_Meeting_Reference()
    {
        return $this->Committee_Meeting_Reference;
    }
    /**
     * Set Committee_Meeting_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_RequestType
     */
    public function setCommittee_Meeting_Reference(\WorkdayWsdl\\StructType\Committee_MeetingObjectType $committee_Meeting_Reference = null)
    {
        $this->Committee_Meeting_Reference = $committee_Meeting_Reference;
        return $this;
    }
    /**
     * Get Committee_Meeting_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Meeting_DataType|null
     */
    public function getCommittee_Meeting_Data()
    {
        return $this->Committee_Meeting_Data;
    }
    /**
     * Set Committee_Meeting_Data value
     * @param \WorkdayWsdl\\StructType\Committee_Meeting_DataType $committee_Meeting_Data
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_RequestType
     */
    public function setCommittee_Meeting_Data(\WorkdayWsdl\\StructType\Committee_Meeting_DataType $committee_Meeting_Data = null)
    {
        $this->Committee_Meeting_Data = $committee_Meeting_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Meeting_RequestType
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
