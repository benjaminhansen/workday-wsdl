<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Job Profile and its associated data.
 * @subpackage Structs
 */
class Job_Profile_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the job profile.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Job_ProfileObjectType[]
     */
    public $Job_Profile_Reference;
    /**
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * Constructor method for Job_Profile_Request_ReferencesType
     * @uses Job_Profile_Request_ReferencesType::setJob_Profile_Reference()
     * @uses Job_Profile_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType[] $job_Profile_Reference
     * @param bool $skip_Non_Existing_Instances
     */
    public function __construct(array $job_Profile_Reference = array(), $skip_Non_Existing_Instances = null)
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \WorkdayWsdl\\StructType\Job_ProfileObjectType[]|null
     */
    public function getJob_Profile_Reference()
    {
        return $this->Job_Profile_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Profile_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Profile_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Profile_ReferenceForArrayConstraintsFromSetJob_Profile_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_ProfileObjectType) {
                $invalidValues[] = is_object($job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem) ? get_class($job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem), var_export($job_Profile_Request_ReferencesTypeJob_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_ProfileObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType[] $job_Profile_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Request_ReferencesType
     */
    public function setJob_Profile_Reference(array $job_Profile_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Profile_ReferenceArrayErrorMessage = self::validateJob_Profile_ReferenceForArrayConstraintsFromSetJob_Profile_Reference($job_Profile_Reference))) {
            throw new \InvalidArgumentException($job_Profile_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Profile_Reference = $job_Profile_Reference;
        return $this;
    }
    /**
     * Add item to Job_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_ProfileObjectType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Request_ReferencesType
     */
    public function addToJob_Profile_Reference(\WorkdayWsdl\\StructType\Job_ProfileObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_ProfileObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_ProfileObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Reference[] = $item;
        return $this;
    }
    /**
     * Get Skip_Non_Existing_Instances value
     * @return bool|null
     */
    public function getSkip_Non_Existing_Instances()
    {
        return $this->Skip_Non_Existing_Instances;
    }
    /**
     * Set Skip_Non_Existing_Instances value
     * @param bool $skip_Non_Existing_Instances
     * @return \WorkdayWsdl\\StructType\Job_Profile_Request_ReferencesType
     */
    public function setSkip_Non_Existing_Instances($skip_Non_Existing_Instances = null)
    {
        // validation for constraint: boolean
        if (!is_null($skip_Non_Existing_Instances) && !is_bool($skip_Non_Existing_Instances)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skip_Non_Existing_Instances, true), gettype($skip_Non_Existing_Instances)), __LINE__);
        }
        $this->Skip_Non_Existing_Instances = $skip_Non_Existing_Instances;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Request_ReferencesType
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
