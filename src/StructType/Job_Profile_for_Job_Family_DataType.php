<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_for_Job_Family_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Job Profile reference for a Job Family.
 * @subpackage Structs
 */
class Job_Profile_for_Job_Family_DataType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job profile.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ProfileObjectType
     */
    public $Job_Profile_Reference;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the job profile reference will be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Profile_for_Job_Family_DataType
     * @uses Job_Profile_for_Job_Family_DataType::setJob_Profile_Reference()
     * @uses Job_Profile_for_Job_Family_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference = null, $delete = null)
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setDelete($delete);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Job_ProfileObjectType|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * Set Job_Profile_Reference value
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_for_Job_Family_DataType
     */
    public function setJob_Profile_Reference(\WorkdayWsdl\\StructType\Job_ProfileObjectType $job_Profile_Reference = null)
    {
        $this->Job_Profile_Reference = $job_Profile_Reference;
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
     * @return \WorkdayWsdl\\StructType\Job_Profile_for_Job_Family_DataType
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
     * @return \WorkdayWsdl\\StructType\Job_Profile_for_Job_Family_DataType
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
