<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Job Family reference(s) to be retrieved. Does not support job family groups.
 * @subpackage Structs
 */
class Job_Family_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Job_Family_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference element representing a unique instance of Job Family. Does not support job family groups.
     * - maxOccurs: unbounded
     * @var \StructType\Job_FamilyObjectType[]
     */
    public $Job_Family_Reference;
    /**
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * Constructor method for Job_Family_Request_ReferencesType
     * @uses Job_Family_Request_ReferencesType::setJob_Family_Reference()
     * @uses Job_Family_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @param \StructType\Job_FamilyObjectType[] $job_Family_Reference
     * @param bool $skip_Non_Existing_Instances
     */
    public function __construct(array $job_Family_Reference = array(), $skip_Non_Existing_Instances = null)
    {
        $this
            ->setJob_Family_Reference($job_Family_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances);
    }
    /**
     * Get Job_Family_Reference value
     * @return \StructType\Job_FamilyObjectType[]|null
     */
    public function getJob_Family_Reference()
    {
        return $this->Job_Family_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_Request_ReferencesTypeJob_Family_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Family_Request_ReferencesTypeJob_Family_ReferenceItem instanceof \StructType\Job_FamilyObjectType) {
                $invalidValues[] = is_object($job_Family_Request_ReferencesTypeJob_Family_ReferenceItem) ? get_class($job_Family_Request_ReferencesTypeJob_Family_ReferenceItem) : sprintf('%s(%s)', gettype($job_Family_Request_ReferencesTypeJob_Family_ReferenceItem), var_export($job_Family_Request_ReferencesTypeJob_Family_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_FamilyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_FamilyObjectType[] $job_Family_Reference
     * @return \StructType\Job_Family_Request_ReferencesType
     */
    public function setJob_Family_Reference(array $job_Family_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_ReferenceArrayErrorMessage = self::validateJob_Family_ReferenceForArrayConstraintsFromSetJob_Family_Reference($job_Family_Reference))) {
            throw new \InvalidArgumentException($job_Family_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Reference = $job_Family_Reference;
        return $this;
    }
    /**
     * Add item to Job_Family_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_FamilyObjectType $item
     * @return \StructType\Job_Family_Request_ReferencesType
     */
    public function addToJob_Family_Reference(\StructType\Job_FamilyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_FamilyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Reference property can only contain items of type \StructType\Job_FamilyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Reference[] = $item;
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
     * @return \StructType\Job_Family_Request_ReferencesType
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
     * @return \StructType\Job_Family_Request_ReferencesType
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
