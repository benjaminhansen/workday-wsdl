<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maintain_Committee_Definition_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the instructions for adding or updating a committee definition.
 * @subpackage Structs
 */
class Maintain_Committee_Definition_RequestType extends AbstractStructBase
{
    /**
     * The Committee_Definition_Reference
     * Meta information extracted from the WSDL
     * - documentation: Committee Definition
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\CommitteeObjectType
     */
    public $Committee_Definition_Reference;
    /**
     * The Committee_Definition_Data
     * @var \WorkdayWsdl\\StructType\Committee_Definition_DataType
     */
    public $Committee_Definition_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add or Update
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
     * Constructor method for Maintain_Committee_Definition_RequestType
     * @uses Maintain_Committee_Definition_RequestType::setCommittee_Definition_Reference()
     * @uses Maintain_Committee_Definition_RequestType::setCommittee_Definition_Data()
     * @uses Maintain_Committee_Definition_RequestType::setAdd_Only()
     * @uses Maintain_Committee_Definition_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Definition_DataType $committee_Definition_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference = null, \WorkdayWsdl\\StructType\Committee_Definition_DataType $committee_Definition_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setCommittee_Definition_Reference($committee_Definition_Reference)
            ->setCommittee_Definition_Data($committee_Definition_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Committee_Definition_Reference value
     * @return \WorkdayWsdl\\StructType\CommitteeObjectType|null
     */
    public function getCommittee_Definition_Reference()
    {
        return $this->Committee_Definition_Reference;
    }
    /**
     * Set Committee_Definition_Reference value
     * @param \WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_RequestType
     */
    public function setCommittee_Definition_Reference(\WorkdayWsdl\\StructType\CommitteeObjectType $committee_Definition_Reference = null)
    {
        $this->Committee_Definition_Reference = $committee_Definition_Reference;
        return $this;
    }
    /**
     * Get Committee_Definition_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Definition_DataType|null
     */
    public function getCommittee_Definition_Data()
    {
        return $this->Committee_Definition_Data;
    }
    /**
     * Set Committee_Definition_Data value
     * @param \WorkdayWsdl\\StructType\Committee_Definition_DataType $committee_Definition_Data
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_RequestType
     */
    public function setCommittee_Definition_Data(\WorkdayWsdl\\StructType\Committee_Definition_DataType $committee_Definition_Data = null)
    {
        $this->Committee_Definition_Data = $committee_Definition_Data;
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
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_RequestType
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
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_RequestType
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
     * @return \WorkdayWsdl\\StructType\Maintain_Committee_Definition_RequestType
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
