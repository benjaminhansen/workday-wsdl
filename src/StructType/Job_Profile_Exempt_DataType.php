<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Exempt_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Job Profile Exempt data for a Job Profile.
 * @subpackage Structs
 */
class Job_Profile_Exempt_DataType extends AbstractStructBase
{
    /**
     * The Location_Context_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains the reference to the Country Reference or Country Region Reference for this Job Exempt value. Leave ISO 3166 1 Alpha 2 Code blank when there’s a value on Location Context.
     * @var \WorkdayWsdl\\StructType\Location_ContextObjectType
     */
    public $Location_Context_Reference;
    /**
     * The Job_Exempt
     * Meta information extracted from the WSDL
     * - documentation: Returns True if the Job Profile is Exempt for the given Country or Country Region.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Job_Exempt;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If True is entered, the Job Exempt for the supplied Country/Country Region reference will be deleted.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Job_Profile_Exempt_DataType
     * @uses Job_Profile_Exempt_DataType::setLocation_Context_Reference()
     * @uses Job_Profile_Exempt_DataType::setJob_Exempt()
     * @uses Job_Profile_Exempt_DataType::setDelete()
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType $location_Context_Reference
     * @param bool $job_Exempt
     * @param bool $delete
     */
    public function __construct(\WorkdayWsdl\\StructType\Location_ContextObjectType $location_Context_Reference = null, $job_Exempt = null, $delete = null)
    {
        $this
            ->setLocation_Context_Reference($location_Context_Reference)
            ->setJob_Exempt($job_Exempt)
            ->setDelete($delete);
    }
    /**
     * Get Location_Context_Reference value
     * @return \WorkdayWsdl\\StructType\Location_ContextObjectType|null
     */
    public function getLocation_Context_Reference()
    {
        return $this->Location_Context_Reference;
    }
    /**
     * Set Location_Context_Reference value
     * @param \WorkdayWsdl\\StructType\Location_ContextObjectType $location_Context_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Exempt_DataType
     */
    public function setLocation_Context_Reference(\WorkdayWsdl\\StructType\Location_ContextObjectType $location_Context_Reference = null)
    {
        $this->Location_Context_Reference = $location_Context_Reference;
        return $this;
    }
    /**
     * Get Job_Exempt value
     * @return bool|null
     */
    public function getJob_Exempt()
    {
        return $this->Job_Exempt;
    }
    /**
     * Set Job_Exempt value
     * @param bool $job_Exempt
     * @return \WorkdayWsdl\\StructType\Job_Profile_Exempt_DataType
     */
    public function setJob_Exempt($job_Exempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($job_Exempt) && !is_bool($job_Exempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($job_Exempt, true), gettype($job_Exempt)), __LINE__);
        }
        $this->Job_Exempt = $job_Exempt;
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
     * @return \WorkdayWsdl\\StructType\Job_Profile_Exempt_DataType
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
     * @return \WorkdayWsdl\\StructType\Job_Profile_Exempt_DataType
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
