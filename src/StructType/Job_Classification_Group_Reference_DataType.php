<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: A unique identifier used to reference a Job Classification Group.
 * @subpackage Structs
 */
class Job_Classification_Group_Reference_DataType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Name
     * Meta information extracted from the WSDL
     * - documentation: The name of a Job Classification Group.
     * - maxOccurs: 1
     * @var string
     */
    public $Job_Classification_Group_Name;
    /**
     * Constructor method for Job_Classification_Group_Reference_DataType
     * @uses Job_Classification_Group_Reference_DataType::setJob_Classification_Group_Name()
     * @param string $job_Classification_Group_Name
     */
    public function __construct($job_Classification_Group_Name = null)
    {
        $this
            ->setJob_Classification_Group_Name($job_Classification_Group_Name);
    }
    /**
     * Get Job_Classification_Group_Name value
     * @return string|null
     */
    public function getJob_Classification_Group_Name()
    {
        return $this->Job_Classification_Group_Name;
    }
    /**
     * Set Job_Classification_Group_Name value
     * @param string $job_Classification_Group_Name
     * @return \StructType\Job_Classification_Group_Reference_DataType
     */
    public function setJob_Classification_Group_Name($job_Classification_Group_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Classification_Group_Name) && !is_string($job_Classification_Group_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Classification_Group_Name, true), gettype($job_Classification_Group_Name)), __LINE__);
        }
        $this->Job_Classification_Group_Name = $job_Classification_Group_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_Group_Reference_DataType
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
