<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Category_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that encapsulates the Job Category Data
 * @subpackage Structs
 */
class Job_Category_DataType extends AbstractStructBase
{
    /**
     * The Job_Category_ID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job category.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Category_ID;
    /**
     * The Job_Category_Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the Job Category.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Category_Name;
    /**
     * The Job_Category_Description
     * Meta information extracted from the WSDL
     * - documentation: Free form text describing a job category.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Category_Description;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Boolean which indicates if the Job category is inactive.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Job_Category_DataType
     * @uses Job_Category_DataType::setJob_Category_ID()
     * @uses Job_Category_DataType::setJob_Category_Name()
     * @uses Job_Category_DataType::setJob_Category_Description()
     * @uses Job_Category_DataType::setInactive()
     * @param string $job_Category_ID
     * @param string $job_Category_Name
     * @param string $job_Category_Description
     * @param bool $inactive
     */
    public function __construct($job_Category_ID = null, $job_Category_Name = null, $job_Category_Description = null, $inactive = null)
    {
        $this
            ->setJob_Category_ID($job_Category_ID)
            ->setJob_Category_Name($job_Category_Name)
            ->setJob_Category_Description($job_Category_Description)
            ->setInactive($inactive);
    }
    /**
     * Get Job_Category_ID value
     * @return string|null
     */
    public function getJob_Category_ID()
    {
        return $this->Job_Category_ID;
    }
    /**
     * Set Job_Category_ID value
     * @param string $job_Category_ID
     * @return \WorkdayWsdl\\StructType\Job_Category_DataType
     */
    public function setJob_Category_ID($job_Category_ID = null)
    {
        // validation for constraint: string
        if (!is_null($job_Category_ID) && !is_string($job_Category_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Category_ID, true), gettype($job_Category_ID)), __LINE__);
        }
        $this->Job_Category_ID = $job_Category_ID;
        return $this;
    }
    /**
     * Get Job_Category_Name value
     * @return string|null
     */
    public function getJob_Category_Name()
    {
        return $this->Job_Category_Name;
    }
    /**
     * Set Job_Category_Name value
     * @param string $job_Category_Name
     * @return \WorkdayWsdl\\StructType\Job_Category_DataType
     */
    public function setJob_Category_Name($job_Category_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Category_Name) && !is_string($job_Category_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Category_Name, true), gettype($job_Category_Name)), __LINE__);
        }
        $this->Job_Category_Name = $job_Category_Name;
        return $this;
    }
    /**
     * Get Job_Category_Description value
     * @return string|null
     */
    public function getJob_Category_Description()
    {
        return $this->Job_Category_Description;
    }
    /**
     * Set Job_Category_Description value
     * @param string $job_Category_Description
     * @return \WorkdayWsdl\\StructType\Job_Category_DataType
     */
    public function setJob_Category_Description($job_Category_Description = null)
    {
        // validation for constraint: string
        if (!is_null($job_Category_Description) && !is_string($job_Category_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Category_Description, true), gettype($job_Category_Description)), __LINE__);
        }
        $this->Job_Category_Description = $job_Category_Description;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Job_Category_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Category_DataType
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
