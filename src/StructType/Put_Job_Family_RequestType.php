<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Family_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request element for Put Job Family
 * @subpackage Structs
 */
class Put_Job_Family_RequestType extends AbstractStructBase
{
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_FamilyObjectType
     */
    public $Job_Family_Reference;
    /**
     * The Job_Family_Data
     * Meta information extracted from the WSDL
     * - documentation: Data to be used for adding a new Job Family or updating an existing Job Family.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Family_DataType
     */
    public $Job_Family_Data;
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
     * Constructor method for Put_Job_Family_RequestType
     * @uses Put_Job_Family_RequestType::setJob_Family_Reference()
     * @uses Put_Job_Family_RequestType::setJob_Family_Data()
     * @uses Put_Job_Family_RequestType::setAdd_Only()
     * @uses Put_Job_Family_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference
     * @param \WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference = null, \WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setJob_Family_Data($job_Family_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Job_Family_Reference value
     * @return \WorkdayWsdl\\StructType\Job_FamilyObjectType|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * Set Job_Family_Reference value
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_RequestType
     */
    public function setJob_Family_Reference(\WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference = null)
    {
        $this->Job_Family_Reference = $job_Family_Reference;
        return $this;
    }
    /**
     * Get Job_Family_Data value
     * @return \WorkdayWsdl\\StructType\Job_Family_DataType|null
     */
    public function getJob_Family_Data()
    {
        return $this->Job_Family_Data;
    }
    /**
     * Set Job_Family_Data value
     * @param \WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_RequestType
     */
    public function setJob_Family_Data(\WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data = null)
    {
        $this->Job_Family_Data = $job_Family_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_RequestType
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
