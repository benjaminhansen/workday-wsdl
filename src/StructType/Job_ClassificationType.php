<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_ClassificationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Classification Group Data
 * @subpackage Structs
 */
class Job_ClassificationType extends AbstractStructBase
{
    /**
     * The Job_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier use to reference a Job Classification.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ClassificationObjectType
     */
    public $Job_Classification_Reference;
    /**
     * The Job_Classification_Data
     * Meta information extracted from the WSDL
     * - documentation: Job Classification Data
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_DataType
     */
    public $Job_Classification_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Flag indicating that the referenced data should be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_ClassificationType
     * @uses Job_ClassificationType::setJob_Classification_Reference()
     * @uses Job_ClassificationType::setJob_Classification_Data()
     * @uses Job_ClassificationType::setDelete()
     * @param \WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Job_Classification_DataType $job_Classification_Data
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null, \WorkdayWsdl\\StructType\Job_Classification_DataType $job_Classification_Data = null, $delete = null)
    {
        $this
            ->setJob_Classification_Reference($job_Classification_Reference)
            ->setJob_Classification_Data($job_Classification_Data)
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
     * @return \WorkdayWsdl\\StructType\Job_ClassificationType
     */
    public function setJob_Classification_Reference(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null)
    {
        $this->Job_Classification_Reference = $job_Classification_Reference;
        return $this;
    }
    /**
     * Get Job_Classification_Data value
     * @return \WorkdayWsdl\\StructType\Job_Classification_DataType|null
     */
    public function getJob_Classification_Data()
    {
        return $this->Job_Classification_Data;
    }
    /**
     * Set Job_Classification_Data value
     * @param \WorkdayWsdl\\StructType\Job_Classification_DataType $job_Classification_Data
     * @return \WorkdayWsdl\\StructType\Job_ClassificationType
     */
    public function setJob_Classification_Data(\WorkdayWsdl\\StructType\Job_Classification_DataType $job_Classification_Data = null)
    {
        $this->Job_Classification_Data = $job_Classification_Data;
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
     * @return \WorkdayWsdl\\StructType\Job_ClassificationType
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
     * @return \WorkdayWsdl\\StructType\Job_ClassificationType
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
