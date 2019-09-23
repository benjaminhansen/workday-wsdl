<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Interests_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the information about the employee's job interests.
 * @subpackage Structs
 */
class Job_Interests_DataType extends AbstractStructBase
{
    /**
     * The Job_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: Indicates an employee's job interest.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_ProfileObjectType[]
     */
    public $Job_Profile_Reference;
    /**
     * Constructor method for Job_Interests_DataType
     * @uses Job_Interests_DataType::setJob_Profile_Reference()
     * @param \StructType\Job_ProfileObjectType[] $job_Profile_Reference
     */
    public function __construct(array $job_Profile_Reference = array())
    {
        $this
            ->setJob_Profile_Reference($job_Profile_Reference);
    }
    /**
     * Get Job_Profile_Reference value
     * @return \StructType\Job_ProfileObjectType[]|null
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
        foreach ($values as $job_Interests_DataTypeJob_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Interests_DataTypeJob_Profile_ReferenceItem instanceof \StructType\Job_ProfileObjectType) {
                $invalidValues[] = is_object($job_Interests_DataTypeJob_Profile_ReferenceItem) ? get_class($job_Interests_DataTypeJob_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($job_Interests_DataTypeJob_Profile_ReferenceItem), var_export($job_Interests_DataTypeJob_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Profile_Reference property can only contain items of type \StructType\Job_ProfileObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_ProfileObjectType[] $job_Profile_Reference
     * @return \StructType\Job_Interests_DataType
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
     * @param \StructType\Job_ProfileObjectType $item
     * @return \StructType\Job_Interests_DataType
     */
    public function addToJob_Profile_Reference(\StructType\Job_ProfileObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_ProfileObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Profile_Reference property can only contain items of type \StructType\Job_ProfileObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Profile_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Interests_DataType
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
