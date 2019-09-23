<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Family_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job Family Response Data containing the retrieved Job Family information
 * @subpackage Structs
 */
class Job_Family_Response_DataType extends AbstractStructBase
{
    /**
     * The Job_Family
     * Meta information extracted from the WSDL
     * - documentation: contains the retrieved Job Family information
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Job_FamilyType[]
     */
    public $Job_Family;
    /**
     * Constructor method for Job_Family_Response_DataType
     * @uses Job_Family_Response_DataType::setJob_Family()
     * @param \WorkdayWsdl\\StructType\Job_FamilyType[] $job_Family
     */
    public function __construct(array $job_Family = array())
    {
        $this
            ->setJob_Family($job_Family);
    }
    /**
     * Get Job_Family value
     * @return \WorkdayWsdl\\StructType\Job_FamilyType[]|null
     */
    public function getJob_Family()
    {
        return $this->Job_Family;
    }
    /**
     * This method is responsible for validating the values passed to the setJob_Family method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJob_Family method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJob_FamilyForArrayConstraintsFromSetJob_Family(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Family_Response_DataTypeJob_FamilyItem) {
            // validation for constraint: itemType
            if (!$job_Family_Response_DataTypeJob_FamilyItem instanceof \WorkdayWsdl\\StructType\Job_FamilyType) {
                $invalidValues[] = is_object($job_Family_Response_DataTypeJob_FamilyItem) ? get_class($job_Family_Response_DataTypeJob_FamilyItem) : sprintf('%s(%s)', gettype($job_Family_Response_DataTypeJob_FamilyItem), var_export($job_Family_Response_DataTypeJob_FamilyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Job_Family property can only contain items of type \WorkdayWsdl\\StructType\Job_FamilyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Job_Family value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_FamilyType[] $job_Family
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_DataType
     */
    public function setJob_Family(array $job_Family = array())
    {
        // validation for constraint: array
        if ('' !== ($job_FamilyArrayErrorMessage = self::validateJob_FamilyForArrayConstraintsFromSetJob_Family($job_Family))) {
            throw new \InvalidArgumentException($job_FamilyArrayErrorMessage, __LINE__);
        }
        $this->Job_Family = $job_Family;
        return $this;
    }
    /**
     * Add item to Job_Family value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Job_FamilyType $item
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_DataType
     */
    public function addToJob_Family(\WorkdayWsdl\\StructType\Job_FamilyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Job_FamilyType) {
            throw new \InvalidArgumentException(sprintf('The Job_Family property can only contain items of type \WorkdayWsdl\\StructType\Job_FamilyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Job_Family[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Family_Response_DataType
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
