<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the Request References element to retrieve a specific instance(s) of Job Classification Group and its associated data.
 * @subpackage Structs
 */
class Job_Classification_Group_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Job Classification Group.
     * - maxOccurs: unbounded
     * @var \StructType\Job_Classification_GroupObjectType[]
     */
    public $Job_Classification_Group_Reference;
    /**
     * Constructor method for Job_Classification_Group_Request_ReferencesType
     * @uses Job_Classification_Group_Request_ReferencesType::setJob_Classification_Group_Reference()
     * @param \StructType\Job_Classification_GroupObjectType[] $job_Classification_Group_Reference
     */
    public function __construct(array $job_Classification_Group_Reference = array())
    {
        $this
            ->setJob_Classification_Group_Reference($job_Classification_Group_Reference);
    }
    /**
     * Get Job_Classification_Group_Reference value
     * @return \StructType\Job_Classification_GroupObjectType[]|null
     */
    public function getJob_Classification_Group_Reference()
    {
        return $this->Job_Classification_Group_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Group_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Group_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_Group_ReferenceForArrayConstraintsFromSetJob_Classification_Group_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem instanceof \StructType\Job_Classification_GroupObjectType) {
                $invalidValues[] = is_object($job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem) ? get_class($job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem) : sprintf('%s(%s)', gettype($job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem), var_export($job_Classification_Group_Request_ReferencesTypeJob_Classification_Group_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Group_Reference property can only contain items of type \StructType\Job_Classification_GroupObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_GroupObjectType[] $job_Classification_Group_Reference
     * @return \StructType\Job_Classification_Group_Request_ReferencesType
     */
    public function setJob_Classification_Group_Reference(array $job_Classification_Group_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_Group_ReferenceArrayErrorMessage = self::validateJob_Classification_Group_ReferenceForArrayConstraintsFromSetJob_Classification_Group_Reference($job_Classification_Group_Reference))) {
            throw new \InvalidArgumentException($job_Classification_Group_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Group_Reference = $job_Classification_Group_Reference;
        return $this;
    }
    /**
     * Add item to Job_Classification_Group_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_GroupObjectType $item
     * @return \StructType\Job_Classification_Group_Request_ReferencesType
     */
    public function addToJob_Classification_Group_Reference(\StructType\Job_Classification_GroupObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Classification_GroupObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Group_Reference property can only contain items of type \StructType\Job_Classification_GroupObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Group_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_Group_Request_ReferencesType
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
