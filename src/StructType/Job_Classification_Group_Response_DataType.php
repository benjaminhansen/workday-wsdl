<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Classification_Group_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the Job Classification Group response data
 * @subpackage Structs
 */
class Job_Classification_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Job_Classification_Group
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Job Classification Group data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Job_Classification_Group_NewType[]
     */
    public $Job_Classification_Group;
    /**
     * Constructor method for Job_Classification_Group_Response_DataType
     * @uses Job_Classification_Group_Response_DataType::setJob_Classification_Group()
     * @param \StructType\Job_Classification_Group_NewType[] $job_Classification_Group
     */
    public function __construct(array $job_Classification_Group = array())
    {
        $this
            ->setJob_Classification_Group($job_Classification_Group);
    }
    /**
     * Get Job_Classification_Group value
     * @return \StructType\Job_Classification_Group_NewType[]|null
     */
    public function getJob_Classification_Group()
    {
        return $this->Job_Classification_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Classification_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Classification_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Classification_GroupForArrayConstraintsFromSetJob_Classification_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Classification_Group_Response_DataTypeJob_Classification_GroupItem) {
            // validation for constraint: itemType
            if (!$job_Classification_Group_Response_DataTypeJob_Classification_GroupItem instanceof \StructType\Job_Classification_Group_NewType) {
                $invalidValues[] = is_object($job_Classification_Group_Response_DataTypeJob_Classification_GroupItem) ? get_class($job_Classification_Group_Response_DataTypeJob_Classification_GroupItem) : sprintf('%s(%s)', gettype($job_Classification_Group_Response_DataTypeJob_Classification_GroupItem), var_export($job_Classification_Group_Response_DataTypeJob_Classification_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Classification_Group property can only contain items of type \StructType\Job_Classification_Group_NewType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Classification_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_NewType[] $job_Classification_Group
     * @return \StructType\Job_Classification_Group_Response_DataType
     */
    public function setJob_Classification_Group(array $job_Classification_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Classification_GroupArrayErrorMessage = self::validateJob_Classification_GroupForArrayConstraintsFromSetJob_Classification_Group($job_Classification_Group))) {
            throw new \InvalidArgumentException($job_Classification_GroupArrayErrorMessage, __LINE__);
        }
        $this->Job_Classification_Group = $job_Classification_Group;
        return $this;
    }
    /**
     * Add item to Job_Classification_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Job_Classification_Group_NewType $item
     * @return \StructType\Job_Classification_Group_Response_DataType
     */
    public function addToJob_Classification_Group(\StructType\Job_Classification_Group_NewType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Job_Classification_Group_NewType) {
            throw new \InvalidArgumentException(sprintf('The Job_Classification_Group property can only contain items of type \StructType\Job_Classification_Group_NewType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Classification_Group[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Classification_Group_Response_DataType
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
