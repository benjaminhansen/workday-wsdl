<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Job_Family_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Job Family data for a job profile.
 * @subpackage Structs
 */
class Job_Profile_Job_Family_DataType extends AbstractStructBase
{
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family.
     * @var \StructType\Job_Family_BaseObjectType
     */
    public $Job_Family_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the Job Family will be removed from this Job Profile as of the effective date.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Profile_Job_Family_DataType
     * @uses Job_Profile_Job_Family_DataType::setJob_Family_Reference()
     * @uses Job_Profile_Job_Family_DataType::setDelete()
     * @param \StructType\Job_Family_BaseObjectType $job_Family_Reference
     * @param bool $delete
     */
    public function __construct(\StructType\Job_Family_BaseObjectType $job_Family_Reference = null, $delete = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_Family_BaseObjectType|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * Set Job_Family_Reference value
     * @param \StructType\Job_Family_BaseObjectType $job_Family_Reference
     * @return \StructType\Job_Profile_Job_Family_DataType
     */
    public function setJob_Family_Reference(\StructType\Job_Family_BaseObjectType $job_Family_Reference = null)
    {
        $this->Job_Family_Reference = $job_Family_Reference;
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
     * @return \StructType\Job_Profile_Job_Family_DataType
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
     * @return \StructType\Job_Profile_Job_Family_DataType
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
