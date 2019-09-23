<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Classification_Group_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element for Put Job Classification Group
 * @subpackage Structs
 */
class Put_Job_Classification_Group_RequestType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Job Classification Group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType
     */
    public $Job_Classification_Group_Reference;
    /**
     * The Job_Classification_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about a Job Classification Group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_Group_DataType
     */
    public $Job_Classification_Group_Data;
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
     * Constructor method for Put_Job_Classification_Group_RequestType
     * @uses Put_Job_Classification_Group_RequestType::setJob_Classification_Group_Reference()
     * @uses Put_Job_Classification_Group_RequestType::setJob_Classification_Group_Data()
     * @uses Put_Job_Classification_Group_RequestType::setAdd_Only()
     * @uses Put_Job_Classification_Group_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @param \WorkdayWsdl\\StructType\Job_Classification_Group_DataType $job_Classification_Group_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null, \WorkdayWsdl\\StructType\Job_Classification_Group_DataType $job_Classification_Group_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setJob_Classification_Group_Reference($job_Classification_Group_Reference)
            ->setJob_Classification_Group_Data($job_Classification_Group_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Job_Classification_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType|null
     */
    public function getJob_Classification_Group_Reference()
    {
        return $this->Job_Classification_Group_Reference;
    }
    /**
     * Set Job_Classification_Group_Reference value
     * @param \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @return \WorkdayWsdl\\StructType\Put_Job_Classification_Group_RequestType
     */
    public function setJob_Classification_Group_Reference(\WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null)
    {
        $this->Job_Classification_Group_Reference = $job_Classification_Group_Reference;
        return $this;
    }
    /**
     * Get Job_Classification_Group_Data value
     * @return \WorkdayWsdl\\StructType\Job_Classification_Group_DataType|null
     */
    public function getJob_Classification_Group_Data()
    {
        return $this->Job_Classification_Group_Data;
    }
    /**
     * Set Job_Classification_Group_Data value
     * @param \WorkdayWsdl\\StructType\Job_Classification_Group_DataType $job_Classification_Group_Data
     * @return \WorkdayWsdl\\StructType\Put_Job_Classification_Group_RequestType
     */
    public function setJob_Classification_Group_Data(\WorkdayWsdl\\StructType\Job_Classification_Group_DataType $job_Classification_Group_Data = null)
    {
        $this->Job_Classification_Group_Data = $job_Classification_Group_Data;
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Classification_Group_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Classification_Group_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Classification_Group_RequestType
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
