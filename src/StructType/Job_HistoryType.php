<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_HistoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Job History information.
 * @subpackage Structs
 */
class Job_HistoryType extends AbstractStructBase
{
    /**
     * The Job_History_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Job History profile.
     * - minOccurs: 0
     * @var \StructType\Job_History_SkillObjectType
     */
    public $Job_History_Reference;
    /**
     * The Job_History_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Job History Data.
     * - maxOccurs: unbounded
     * @var \StructType\Job_History_Achievement_DataType[]
     */
    public $Job_History_Data;
    /**
     * Constructor method for Job_HistoryType
     * @uses Job_HistoryType::setJob_History_Reference()
     * @uses Job_HistoryType::setJob_History_Data()
     * @param \StructType\Job_History_SkillObjectType $job_History_Reference
     * @param \StructType\Job_History_Achievement_DataType[] $job_History_Data
     */
    public function __construct(\StructType\Job_History_SkillObjectType $job_History_Reference = null, array $job_History_Data = array())
    {
        $this
            ->setJob_History_Reference($job_History_Reference)
            ->setJob_History_Data($job_History_Data);
    }
    /**
     * Get Job_History_Reference value
     * @return \StructType\Job_History_SkillObjectType|null
     */
    public function getJob_History_Reference()
    {
        return $this->Job_History_Reference;
    }
    /**
     * Set Job_History_Reference value
     * @param \StructType\Job_History_SkillObjectType $job_History_Reference
     * @return \StructType\Job_HistoryType
     */
    public function setJob_History_Reference(\StructType\Job_History_SkillObjectType $job_History_Reference = null)
    {
        $this->Job_History_Reference = $job_History_Reference;
        return $this;
    }
    /**
     * Get Job_History_Data value
     * @return \StructType\Job_History_Achievement_DataType[]|null
     */
    public function getJob_History_Data()
    {
        return $this->Job_History_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_History_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_History_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_History_DataForArrayConstraintsFromSetJob_History_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_HistoryTypeJob_History_DataItem) {
            // validation for constraint: itemType
            if (!$job_HistoryTypeJob_History_DataItem instanceof \StructType\Job_History_Achievement_DataType) {
                $invalidValues[] = is_object($job_HistoryTypeJob_History_DataItem) ? get_class($job_HistoryTypeJob_History_DataItem) : sprintf('%s(%s)', gettype($job_HistoryTypeJob_History_DataItem), var_export($job_HistoryTypeJob_History_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_History_Data property can only contain items of type \StructType\Job_History_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_History_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_History_Achievement_DataType[] $job_History_Data
     * @return \StructType\Job_HistoryType
     */
    public function setJob_History_Data(array $job_History_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($job_History_DataArrayErrorMessage = self::validateJob_History_DataForArrayConstraintsFromSetJob_History_Data($job_History_Data))) {
            throw new \InvalidArgumentException($job_History_DataArrayErrorMessage, __LINE__);
        }
        $this->Job_History_Data = $job_History_Data;
        return $this;
    }
    /**
     * Add item to Job_History_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_History_Achievement_DataType $item
     * @return \StructType\Job_HistoryType
     */
    public function addToJob_History_Data(\StructType\Job_History_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_History_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Job_History_Data property can only contain items of type \StructType\Job_History_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_History_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_HistoryType
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
