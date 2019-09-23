<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Classification_Group_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the instructions for adding or updating a committee classification group
 * @subpackage Structs
 */
class Put_Committee_Classification_Group_RequestType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Classification Group. Used to identify the Committee Classification Group to update. Leave blank on an Add.
     * - minOccurs: 0
     * @var \StructType\Committee_Classification_GroupObjectType
     */
    public $Committee_Classification_Group_Reference;
    /**
     * The Committee_Classification_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Data Committee Classification Group
     * - minOccurs: 0
     * @var \StructType\Committee_Classification_Group_DataType
     */
    public $Committee_Classification_Group_Data;
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
     * Constructor method for Put_Committee_Classification_Group_RequestType
     * @uses Put_Committee_Classification_Group_RequestType::setCommittee_Classification_Group_Reference()
     * @uses Put_Committee_Classification_Group_RequestType::setCommittee_Classification_Group_Data()
     * @uses Put_Committee_Classification_Group_RequestType::setAdd_Only()
     * @uses Put_Committee_Classification_Group_RequestType::setVersion()
     * @param \StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     * @param \StructType\Committee_Classification_Group_DataType $committee_Classification_Group_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null, \StructType\Committee_Classification_Group_DataType $committee_Classification_Group_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setCommittee_Classification_Group_Reference($committee_Classification_Group_Reference)
            ->setCommittee_Classification_Group_Data($committee_Classification_Group_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Committee_Classification_Group_Reference value
     * @return \StructType\Committee_Classification_GroupObjectType|null
     */
    public function getCommittee_Classification_Group_Reference()
    {
        return $this->Committee_Classification_Group_Reference;
    }
    /**
     * Set Committee_Classification_Group_Reference value
     * @param \StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference
     * @return \StructType\Put_Committee_Classification_Group_RequestType
     */
    public function setCommittee_Classification_Group_Reference(\StructType\Committee_Classification_GroupObjectType $committee_Classification_Group_Reference = null)
    {
        $this->Committee_Classification_Group_Reference = $committee_Classification_Group_Reference;
        return $this;
    }
    /**
     * Get Committee_Classification_Group_Data value
     * @return \StructType\Committee_Classification_Group_DataType|null
     */
    public function getCommittee_Classification_Group_Data()
    {
        return $this->Committee_Classification_Group_Data;
    }
    /**
     * Set Committee_Classification_Group_Data value
     * @param \StructType\Committee_Classification_Group_DataType $committee_Classification_Group_Data
     * @return \StructType\Put_Committee_Classification_Group_RequestType
     */
    public function setCommittee_Classification_Group_Data(\StructType\Committee_Classification_Group_DataType $committee_Classification_Group_Data = null)
    {
        $this->Committee_Classification_Group_Data = $committee_Classification_Group_Data;
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
     * @return \StructType\Put_Committee_Classification_Group_RequestType
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
     * @return \StructType\Put_Committee_Classification_Group_RequestType
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
     * @return \StructType\Put_Committee_Classification_Group_RequestType
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
