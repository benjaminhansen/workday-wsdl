<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Group_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Job Family Group and its associated data.
 * @subpackage Structs
 */
class Job_Family_Group_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Job_Family_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Job Family Group.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Job_FamilyObjectType[]
     */
    public $Job_Family_Group_Reference;
    /**
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * Constructor method for Job_Family_Group_Request_ReferencesType
     * @uses Job_Family_Group_Request_ReferencesType::setJob_Family_Group_Reference()
     * @uses Job_Family_Group_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType[] $job_Family_Group_Reference
     * @param bool $skip_Non_Existing_Instances
     */
    public function __construct(array $job_Family_Group_Reference = array(), $skip_Non_Existing_Instances = null)
    {
        $this
            ->setJob_Family_Group_Reference($job_Family_Group_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances);
    }
    /**
     * Get Job_Family_Group_Reference value
     * @return \WorkdayWsdl\\StructType\Job_FamilyObjectType[]|null
     */
    public function getJob_Family_Group_Reference()
    {
        return $this->Job_Family_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_Group_ReferenceForArrayConstraintsFromSetJob_Family_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_FamilyObjectType) {
                $invalidValues[] = is_object($job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem) ? get_class($job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem) : sprintf('%s(%s)', gettype($job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem), var_export($job_Family_Group_Request_ReferencesTypeJob_Family_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_FamilyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType[] $job_Family_Group_Reference
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Request_ReferencesType
     */
    public function setJob_Family_Group_Reference(array $job_Family_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_Group_ReferenceArrayErrorMessage = self::validateJob_Family_Group_ReferenceForArrayConstraintsFromSetJob_Family_Group_Reference($job_Family_Group_Reference))) {
            throw new \InvalidArgumentException($job_Family_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Group_Reference = $job_Family_Group_Reference;
        return $this;
    }
    /**
     * Add item to Job_Family_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_FamilyObjectType $item
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Request_ReferencesType
     */
    public function addToJob_Family_Group_Reference(\WorkdayWsdl\\StructType\Job_FamilyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_FamilyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Group_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_FamilyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Group_Reference[] = $item;
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
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Request_ReferencesType
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
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Request_ReferencesType
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
