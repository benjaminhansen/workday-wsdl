<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Job_Category_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Put Job Category response data.
 * @subpackage Structs
 */
class Put_Job_Category_ResponseType extends AbstractStructBase
{
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Job Category.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_CategoryObjectType
     */
    public $Job_Category_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Job_Category_ResponseType
     * @uses Put_Job_Category_ResponseType::setJob_Category_Reference()
     * @uses Put_Job_Category_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference = null, $version = null)
    {
        $this
            ->setJob_Category_Reference($job_Category_Reference)
            ->setVersion($version);
    }
    /**
     * Get Job_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Job_CategoryObjectType|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * Set Job_Category_Reference value
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference
     * @return \WorkdayWsdl\\StructType\Put_Job_Category_ResponseType
     */
    public function setJob_Category_Reference(\WorkdayWsdl\\StructType\Job_CategoryObjectType $job_Category_Reference = null)
    {
        $this->Job_Category_Reference = $job_Category_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Category_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Job_Category_ResponseType
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
