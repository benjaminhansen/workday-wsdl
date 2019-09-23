<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Classification_Group_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Job Classification
 * @subpackage Structs
 */
class Put_Job_Classification_Group_ResponseType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Job Classification Group.
     * - minOccurs: 0
     * @var \StructType\Job_Classification_GroupObjectType
     */
    public $Job_Classification_Group_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Job_Classification_Group_ResponseType
     * @uses Put_Job_Classification_Group_ResponseType::setJob_Classification_Group_Reference()
     * @uses Put_Job_Classification_Group_ResponseType::setVersion()
     * @param \StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @param string $version
     */
    public function __construct(\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null, $version = null)
    {
        $this
            ->setJob_Classification_Group_Reference($job_Classification_Group_Reference)
            ->setVersion($version);
    }
    /**
     * Get Job_Classification_Group_Reference value
     * @return \StructType\Job_Classification_GroupObjectType|null
     */
    public function getJob_Classification_Group_Reference()
    {
        return $this->Job_Classification_Group_Reference;
    }
    /**
     * Set Job_Classification_Group_Reference value
     * @param \StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference
     * @return \StructType\Put_Job_Classification_Group_ResponseType
     */
    public function setJob_Classification_Group_Reference(\StructType\Job_Classification_GroupObjectType $job_Classification_Group_Reference = null)
    {
        $this->Job_Classification_Group_Reference = $job_Classification_Group_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Put_Job_Classification_Group_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Put_Job_Classification_Group_ResponseType
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
