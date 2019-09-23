<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_FamilyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains Job Family information
 * @subpackage Structs
 */
class Job_FamilyType extends AbstractStructBase
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
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Family_DataType
     */
    public $Job_Family_Data;
    /**
     * Constructor method for Job_FamilyType
     * @uses Job_FamilyType::setJob_Family_Reference()
     * @uses Job_FamilyType::setJob_Family_Data()
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference
     * @param \WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Reference = null, \WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setJob_Family_Data($job_Family_Data);
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
     * @return \WorkdayWsdl\\StructType\Job_FamilyType
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
     * @return \WorkdayWsdl\\StructType\Job_FamilyType
     */
    public function setJob_Family_Data(\WorkdayWsdl\\StructType\Job_Family_DataType $job_Family_Data = null)
    {
        $this->Job_Family_Data = $job_Family_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_FamilyType
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
