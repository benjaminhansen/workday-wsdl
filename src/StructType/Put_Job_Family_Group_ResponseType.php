<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Family_Group_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Put Job Family Group
 * @subpackage Structs
 */
class Put_Job_Family_Group_ResponseType extends AbstractStructBase
{
    /**
     * The Job_Family_Groups_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family Group.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_FamilyObjectType
     */
    public $Job_Family_Groups_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Job_Family_Group_ResponseType
     * @uses Put_Job_Family_Group_ResponseType::setJob_Family_Groups_Reference()
     * @uses Put_Job_Family_Group_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Groups_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Groups_Reference = null, $version = null)
    {
        $this
            ->setJob_Family_Groups_Reference($job_Family_Groups_Reference)
            ->setVersion($version);
    }
    /**
     * Get Job_Family_Groups_Reference value
     * @return \WorkdayWsdl\\StructType\Job_FamilyObjectType|null
     */
    public function getJob_Family_Groups_Reference()
    {
        return $this->Job_Family_Groups_Reference;
    }
    /**
     * Set Job_Family_Groups_Reference value
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Groups_Reference
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_Group_ResponseType
     */
    public function setJob_Family_Groups_Reference(\WorkdayWsdl\\StructType\Job_FamilyObjectType $job_Family_Groups_Reference = null)
    {
        $this->Job_Family_Groups_Reference = $job_Family_Groups_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_Group_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Family_Group_ResponseType
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
