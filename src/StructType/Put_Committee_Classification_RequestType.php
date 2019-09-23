<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Committee_Classification_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the instructions for adding or updating a committee classification.
 * @subpackage Structs
 */
class Put_Committee_Classification_RequestType extends AbstractStructBase
{
    /**
     * The Committee_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Reference to the Committee Classification . Used to identify the Committee Classification Committee Classification to update. Leave blank on an Add.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_ClassificationObjectType
     */
    public $Committee_Classification_Reference;
    /**
     * The Committee_Classification_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Committee_Classification_DataType
     */
    public $Committee_Classification_Data;
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
     * Constructor method for Put_Committee_Classification_RequestType
     * @uses Put_Committee_Classification_RequestType::setCommittee_Classification_Reference()
     * @uses Put_Committee_Classification_RequestType::setCommittee_Classification_Data()
     * @uses Put_Committee_Classification_RequestType::setAdd_Only()
     * @uses Put_Committee_Classification_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Committee_Classification_DataType $committee_Classification_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null, \WorkdayWsdl\\StructType\Committee_Classification_DataType $committee_Classification_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setCommittee_Classification_Reference($committee_Classification_Reference)
            ->setCommittee_Classification_Data($committee_Classification_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Committee_Classification_Reference value
     * @return \WorkdayWsdl\\StructType\Committee_ClassificationObjectType|null
     */
    public function getCommittee_Classification_Reference()
    {
        return $this->Committee_Classification_Reference;
    }
    /**
     * Set Committee_Classification_Reference value
     * @param \WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference
     * @return \WorkdayWsdl\\StructType\Put_Committee_Classification_RequestType
     */
    public function setCommittee_Classification_Reference(\WorkdayWsdl\\StructType\Committee_ClassificationObjectType $committee_Classification_Reference = null)
    {
        $this->Committee_Classification_Reference = $committee_Classification_Reference;
        return $this;
    }
    /**
     * Get Committee_Classification_Data value
     * @return \WorkdayWsdl\\StructType\Committee_Classification_DataType|null
     */
    public function getCommittee_Classification_Data()
    {
        return $this->Committee_Classification_Data;
    }
    /**
     * Set Committee_Classification_Data value
     * @param \WorkdayWsdl\\StructType\Committee_Classification_DataType $committee_Classification_Data
     * @return \WorkdayWsdl\\StructType\Put_Committee_Classification_RequestType
     */
    public function setCommittee_Classification_Data(\WorkdayWsdl\\StructType\Committee_Classification_DataType $committee_Classification_Data = null)
    {
        $this->Committee_Classification_Data = $committee_Classification_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Classification_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Classification_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Committee_Classification_RequestType
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
