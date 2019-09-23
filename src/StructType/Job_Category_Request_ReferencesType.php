<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Category_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing reference instance for a Job Category.
 * @subpackage Structs
 */
class Job_Category_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Job Category.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Job_CategoryObjectType[]
     */
    public $Job_Category_Reference;
    /**
     * Constructor method for Job_Category_Request_ReferencesType
     * @uses Job_Category_Request_ReferencesType::setJob_Category_Reference()
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType[] $job_Category_Reference
     */
    public function __construct(array $job_Category_Reference = array())
    {
        $this
            ->setJob_Category_Reference($job_Category_Reference);
    }
    /**
     * Get Job_Category_Reference value
     * @return \WorkdayWsdl\\StructType\Job_CategoryObjectType[]|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Category_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Category_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Category_ReferenceForArrayConstraintsFromSetJob_Category_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Category_Request_ReferencesTypeJob_Category_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Category_Request_ReferencesTypeJob_Category_ReferenceItem instanceof \WorkdayWsdl\\StructType\Job_CategoryObjectType) {
                $invalidValues[] = is_object($job_Category_Request_ReferencesTypeJob_Category_ReferenceItem) ? get_class($job_Category_Request_ReferencesTypeJob_Category_ReferenceItem) : sprintf('%s(%s)', gettype($job_Category_Request_ReferencesTypeJob_Category_ReferenceItem), var_export($job_Category_Request_ReferencesTypeJob_Category_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Category_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_CategoryObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Category_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType[] $job_Category_Reference
     * @return \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType
     */
    public function setJob_Category_Reference(array $job_Category_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Category_ReferenceArrayErrorMessage = self::validateJob_Category_ReferenceForArrayConstraintsFromSetJob_Category_Reference($job_Category_Reference))) {
            throw new \InvalidArgumentException($job_Category_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Job_Category_Reference = $job_Category_Reference;
        return $this;
    }
    /**
     * Add item to Job_Category_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_CategoryObjectType $item
     * @return \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType
     */
    public function addToJob_Category_Reference(\WorkdayWsdl\\StructType\Job_CategoryObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_CategoryObjectType) {
            throw new \InvalidArgumentException(sprintf('The Job_Category_Reference property can only contain items of type \WorkdayWsdl\\StructType\Job_CategoryObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Category_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Category_Request_ReferencesType
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
