<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_CategoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the job category reference and data.
 * @subpackage Structs
 */
class Job_CategoryType extends AbstractStructBase
{
    /**
     * The Job_Category_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Job Category.
     * - minOccurs: 0
     * @var \StructType\Job_CategoryObjectType
     */
    public $Job_Category_Reference;
    /**
     * The Job_Category_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Category_DataType[]
     */
    public $Job_Category_Data;
    /**
     * Constructor method for Job_CategoryType
     * @uses Job_CategoryType::setJob_Category_Reference()
     * @uses Job_CategoryType::setJob_Category_Data()
     * @param \StructType\Job_CategoryObjectType $job_Category_Reference
     * @param \StructType\Job_Category_DataType[] $job_Category_Data
     */
    public function __construct(\StructType\Job_CategoryObjectType $job_Category_Reference = null, array $job_Category_Data = array())
    {
        $this
            ->setJob_Category_Reference($job_Category_Reference)
            ->setJob_Category_Data($job_Category_Data);
    }
    /**
     * Get Job_Category_Reference value
     * @return \StructType\Job_CategoryObjectType|null
     */
    public function getJob_Category_Reference()
    {
        return $this->Job_Category_Reference;
    }
    /**
     * Set Job_Category_Reference value
     * @param \StructType\Job_CategoryObjectType $job_Category_Reference
     * @return \StructType\Job_CategoryType
     */
    public function setJob_Category_Reference(\StructType\Job_CategoryObjectType $job_Category_Reference = null)
    {
        $this->Job_Category_Reference = $job_Category_Reference;
        return $this;
    }
    /**
     * Get Job_Category_Data value
     * @return \StructType\Job_Category_DataType[]|null
     */
    public function getJob_Category_Data()
    {
        return $this->Job_Category_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Category_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Category_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Category_DataForArrayConstraintsFromSetJob_Category_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_CategoryTypeJob_Category_DataItem) {
            // validation for constraint: itemType
            if (!$job_CategoryTypeJob_Category_DataItem instanceof \StructType\Job_Category_DataType) {
                $invalidValues[] = is_object($job_CategoryTypeJob_Category_DataItem) ? get_class($job_CategoryTypeJob_Category_DataItem) : sprintf('%s(%s)', gettype($job_CategoryTypeJob_Category_DataItem), var_export($job_CategoryTypeJob_Category_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Category_Data property can only contain items of type \StructType\Job_Category_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Category_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Category_DataType[] $job_Category_Data
     * @return \StructType\Job_CategoryType
     */
    public function setJob_Category_Data(array $job_Category_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Category_DataArrayErrorMessage = self::validateJob_Category_DataForArrayConstraintsFromSetJob_Category_Data($job_Category_Data))) {
            throw new \InvalidArgumentException($job_Category_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_Category_Data = $job_Category_Data;
        return $this;
    }
    /**
     * Add item to Job_Category_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Category_DataType $item
     * @return \StructType\Job_CategoryType
     */
    public function addToJob_Category_Data(\StructType\Job_Category_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Category_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_Category_Data property can only contain items of type \StructType\Job_Category_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Category_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_CategoryType
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
