<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_ReferenceType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Job Classification.
 * @subpackage Structs
 */
class Job_Classification_ReferenceType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Job Classification Group must exist for the given value of Job Classification Group Name. | Unique attribute name/description identifying a valid instance of Job Classification Group.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Classification_Group_Name;
    /**
     * The Job_Classification_Name
     * Meta information extracted from the WSDL
     * - documentation: A valid instance of Job Classification must exist for the given values of Job Classification Group Name and Job Classification Name. | Along with Job Classification Group Name (which returns and instance of Job Classification Group),
     * unique attribute name/description identifying a valid instance of Job Classification.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Job_Classification_Name;
    /**
     * Constructor method for Job_Classification_ReferenceType
     * @uses Job_Classification_ReferenceType::setJob_Classification_Group_Name()
     * @uses Job_Classification_ReferenceType::setJob_Classification_Name()
     * @param string $job_Classification_Group_Name
     * @param string $job_Classification_Name
     */
    public function __construct($job_Classification_Group_Name = null, $job_Classification_Name = null)
    {
        $this
            ->setJob_Classification_Group_Name($job_Classification_Group_Name)
            ->setJob_Classification_Name($job_Classification_Name);
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
     * @return \StructType\Job_Classification_ReferenceType
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
     * Get Job_Classification_Name value
     * @return string|null
     */
    public function getJob_Classification_Name()
    {
        return $this->Job_Classification_Name;
    }
    /**
     * Set Job_Classification_Name value
     * @param string $job_Classification_Name
     * @return \StructType\Job_Classification_ReferenceType
     */
    public function setJob_Classification_Name($job_Classification_Name = null)
    {
        // validation for constraint: string
        if (!is_null($job_Classification_Name) && !is_string($job_Classification_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($job_Classification_Name, true), gettype($job_Classification_Name)), __LINE__);
        }
        $this->Job_Classification_Name = $job_Classification_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_ReferenceType
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
