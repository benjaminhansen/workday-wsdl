<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Family_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Put Job Family
 * @subpackage Structs
 */
class Put_Job_Family_ResponseType extends AbstractStructBase
{
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family.
     * - minOccurs: 0
     * @var \StructType\Job_FamilyObjectType
     */
    public $Job_Family_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Job_Family_ResponseType
     * @uses Put_Job_Family_ResponseType::setJob_Family_Reference()
     * @uses Put_Job_Family_ResponseType::setVersion()
     * @param \StructType\Job_FamilyObjectType $job_Family_Reference
     * @param string $version
     */
    public function __construct(\StructType\Job_FamilyObjectType $job_Family_Reference = null, $version = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setVersion($version);
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_FamilyObjectType|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * Set Job_Family_Reference value
     * @param \StructType\Job_FamilyObjectType $job_Family_Reference
     * @return \StructType\Put_Job_Family_ResponseType
     */
    public function setJob_Family_Reference(\StructType\Job_FamilyObjectType $job_Family_Reference = null)
    {
        $this->Job_Family_Reference = $job_Family_Reference;
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
     * @return \StructType\Put_Job_Family_ResponseType
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
     * @return \StructType\Put_Job_Family_ResponseType
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
