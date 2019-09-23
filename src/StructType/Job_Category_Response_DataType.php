<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Category_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that includes the Job Category reference instance and data.
 * @subpackage Structs
 */
class Job_Category_Response_DataType extends AbstractStructBase
{
    /**
     * The Job_Category
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_CategoryType[]
     */
    public $Job_Category;
    /**
     * Constructor method for Job_Category_Response_DataType
     * @uses Job_Category_Response_DataType::setJob_Category()
     * @param \WorkdayWsdl\\StructType\Job_CategoryType[] $job_Category
     */
    public function __construct(array $job_Category = array())
    {
        $this
            ->setJob_Category($job_Category);
    }
    /**
     * Get Job_Category value
     * @return \WorkdayWsdl\\StructType\Job_CategoryType[]|null
     */
    public function getJob_Category()
    {
        return $this->Job_Category;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Category method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Category method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_CategoryForArrayConstraintsFromSetJob_Category(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Category_Response_DataTypeJob_CategoryItem) {
            // validation for constraint: itemType
            if (!$job_Category_Response_DataTypeJob_CategoryItem instanceof \WorkdayWsdl\\StructType\Job_CategoryType) {
                $invalidValues[] = is_object($job_Category_Response_DataTypeJob_CategoryItem) ? get_class($job_Category_Response_DataTypeJob_CategoryItem) : sprintf('%s(%s)', gettype($job_Category_Response_DataTypeJob_CategoryItem), var_export($job_Category_Response_DataTypeJob_CategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Category property can only contain items of type \WorkdayWsdl\\StructType\Job_CategoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Category value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_CategoryType[] $job_Category
     * @return \WorkdayWsdl\\StructType\Job_Category_Response_DataType
     */
    public function setJob_Category(array $job_Category = array())
    {
        // validation for constraint: array
        if ('' !== ($job_CategoryArrayErrorMessage = self::validateJob_CategoryForArrayConstraintsFromSetJob_Category($job_Category))) {
            throw new \InvalidArgumentException($job_CategoryArrayErrorMessage, __LINE__);
        }
        $this->Job_Category = $job_Category;
        return $this;
    }
    /**
     * Add item to Job_Category value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_CategoryType $item
     * @return \WorkdayWsdl\\StructType\Job_Category_Response_DataType
     */
    public function addToJob_Category(\WorkdayWsdl\\StructType\Job_CategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_CategoryType) {
            throw new \InvalidArgumentException(sprintf('The Job_Category property can only contain items of type \WorkdayWsdl\\StructType\Job_CategoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Category[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Category_Response_DataType
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
