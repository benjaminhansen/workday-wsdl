<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Group_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for the Get Job Family request
 * @subpackage Structs
 */
class Job_Family_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Job_Family_Group
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_Family_Group_NewType[]
     */
    public $Job_Family_Group;
    /**
     * Constructor method for Job_Family_Group_Response_DataType
     * @uses Job_Family_Group_Response_DataType::setJob_Family_Group()
     * @param \WorkdayWsdl\\StructType\Job_Family_Group_NewType[] $job_Family_Group
     */
    public function __construct(array $job_Family_Group = array())
    {
        $this
            ->setJob_Family_Group($job_Family_Group);
    }
    /**
     * Get Job_Family_Group value
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_NewType[]|null
     */
    public function getJob_Family_Group()
    {
        return $this->Job_Family_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_Family_GroupForArrayConstraintsFromSetJob_Family_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_Group_Response_DataTypeJob_Family_GroupItem) {
            // validation for constraint: itemType
            if (!$job_Family_Group_Response_DataTypeJob_Family_GroupItem instanceof \WorkdayWsdl\\StructType\Job_Family_Group_NewType) {
                $invalidValues[] = is_object($job_Family_Group_Response_DataTypeJob_Family_GroupItem) ? get_class($job_Family_Group_Response_DataTypeJob_Family_GroupItem) : sprintf('%s(%s)', gettype($job_Family_Group_Response_DataTypeJob_Family_GroupItem), var_export($job_Family_Group_Response_DataTypeJob_Family_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family_Group property can only contain items of type \WorkdayWsdl\\StructType\Job_Family_Group_NewType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Family_Group_NewType[] $job_Family_Group
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Response_DataType
     */
    public function setJob_Family_Group(array $job_Family_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($job_Family_GroupArrayErrorMessage = self::validateJob_Family_GroupForArrayConstraintsFromSetJob_Family_Group($job_Family_Group))) {
            throw new \InvalidArgumentException($job_Family_GroupArrayErrorMessage, __LINE__);
        }
        $this->Job_Family_Group = $job_Family_Group;
        return $this;
    }
    /**
     * Add item to Job_Family_Group value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_Family_Group_NewType $item
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Response_DataType
     */
    public function addToJob_Family_Group(\WorkdayWsdl\\StructType\Job_Family_Group_NewType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_Family_Group_NewType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family_Group property can only contain items of type \WorkdayWsdl\\StructType\Job_Family_Group_NewType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family_Group[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Family_Group_Response_DataType
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
