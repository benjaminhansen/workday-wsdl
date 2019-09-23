<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Get_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Job Profile and its associated data.
 * @subpackage Structs
 */
class Job_Profile_Get_DataType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job profile.
     * - minOccurs: 0
     * @var \StructType\Job_ProfileObjectType
     */
    public $Job_Profile_Reference;
    /**
     * The Job_Profile_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Job_Profile_DataType
     */
    public $Job_Profile_Data;
    /**
     * Constructor method for Job_Profile_Get_DataType
     * @uses Job_Profile_Get_DataType::setJob_Profile_Reference()
     * @uses Job_Profile_Get_DataType::setJob_Profile_Data()
     * @param \StructType\Job_ProfileObjectType $job_Profile_Reference
     * @param \StructType\Job_Profile_DataType $job_Profile_Data
     */
    public function __construct(\StructType\Job_ProfileObjectType $job_Profile_Reference = null, \StructType\Job_Profile_DataType $job_Profile_Data = null)
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setJob_Profile_Data($job_Profile_Data);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \StructType\Job_ProfileObjectType|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * Set Job_Profile_Reference value
     * @param \StructType\Job_ProfileObjectType $job_Profile_Reference
     * @return \StructType\Job_Profile_Get_DataType
     */
    public function setJob_Profile_Reference(\StructType\Job_ProfileObjectType $job_Profile_Reference = null)
    {
        $this->Job_Profile_Reference = $job_Profile_Reference;
        return $this;
    }
    /**
     * Get Job_Profile_Data value
     * @return \StructType\Job_Profile_DataType|null
     */
    public function getJob_Profile_Data()
    {
        return $this->Job_Profile_Data;
    }
    /**
     * Set Job_Profile_Data value
     * @param \StructType\Job_Profile_DataType $job_Profile_Data
     * @return \StructType\Job_Profile_Get_DataType
     */
    public function setJob_Profile_Data(\StructType\Job_Profile_DataType $job_Profile_Data = null)
    {
        $this->Job_Profile_Data = $job_Profile_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_Get_DataType
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
