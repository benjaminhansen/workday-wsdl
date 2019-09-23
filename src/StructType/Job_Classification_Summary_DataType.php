<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Summary_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the job classifications from the job profile for the position and the additional job classifications specified for the position.
 * @subpackage Structs
 */
class Job_Classification_Summary_DataType extends AbstractStructBase
{
    /**
     * The Job_Classification_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job classification.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_ClassificationObjectType
     */
    public $Job_Classification_Reference;
    /**
     * The Job_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType
     */
    public $Job_Group_Reference;
    /**
     * The Additional
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the job classification is an additional job classification for the position.
     * @var bool
     */
    public $Additional;
    /**
     * Constructor method for Job_Classification_Summary_DataType
     * @uses Job_Classification_Summary_DataType::setJob_Classification_Reference()
     * @uses Job_Classification_Summary_DataType::setJob_Group_Reference()
     * @uses Job_Classification_Summary_DataType::setAdditional()
     * @param \WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference
     * @param \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Group_Reference
     * @param bool $additional
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null, \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Group_Reference = null, $additional = null)
    {
        $this
            ->setJob_Classification_Reference($job_Classification_Reference)
            ->setJob_Group_Reference($job_Group_Reference)
            ->setAdditional($additional);
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
     * @return \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType
     */
    public function setJob_Classification_Reference(\WorkdayWsdl\\StructType\Job_ClassificationObjectType $job_Classification_Reference = null)
    {
        $this->Job_Classification_Reference = $job_Classification_Reference;
        return $this;
    }
    /**
     * Get Job_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType|null
     */
    public function getJob_Group_Reference()
    {
        return $this->Job_Group_Reference;
    }
    /**
     * Set Job_Group_Reference value
     * @param \WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Group_Reference
     * @return \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType
     */
    public function setJob_Group_Reference(\WorkdayWsdl\\StructType\Job_Classification_GroupObjectType $job_Group_Reference = null)
    {
        $this->Job_Group_Reference = $job_Group_Reference;
        return $this;
    }
    /**
     * Get Additional value
     * @return bool|null
     */
    public function getAdditional()
    {
        return $this->Additional;
    }
    /**
     * Set Additional value
     * @param bool $additional
     * @return \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType
     */
    public function setAdditional($additional = null)
    {
        // validation for constraint: boolean
        if (!is_null($additional) && !is_bool($additional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($additional, true), gettype($additional)), __LINE__);
        }
        $this->Additional = $additional;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Classification_Summary_DataType
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
