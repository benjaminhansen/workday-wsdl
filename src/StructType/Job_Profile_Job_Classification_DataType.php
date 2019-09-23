<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Job_Classification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Job Classification data for a Job Profile.
 * @subpackage Structs
 */
class Job_Profile_Job_Classification_DataType extends AbstractStructBase
{
    /**
     * The Job_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job classification.
     * @var \WorkdayWsdl\\StructType\Job_ClassificationObjectType
     */
    public $Job_Classification_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the Job Classification will be removed from the Job Profile as of the effective date.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Profile_Job_Classification_DataType
     * @uses Job_Profile_Job_Classification_DataType::setJob_Classification_Reference()
     * @uses Job_Profile_Job_Classification_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null, $delete = null)
    {
        $this
            ->setJob_Classification_Reference($job_Classification_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Job_Classification_Reference value
     * @return \WorkdayWsdl\\StructType\Job_ClassificationObjectType|null
     */
    public function getJob_Classification_Reference()
    {
        return $this->Job_Classification_Reference;
    }
    /**
     * Set Job_Classification_Reference value
     * @param \WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Job_Classification_DataType
     */
    public function setJob_Classification_Reference(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null)
    {
        $this->Job_Classification_Reference = $job_Classification_Reference;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Job_Profile_Job_Classification_DataType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Job_Classification_DataType
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
