<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Work-Study_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Work-Study Data.
 * @subpackage Structs
 */
class Job_Profile_Work_Study_DataType extends AbstractStructBase
{
    /**
     * The Requirement_Option_Reference
     * Meta information extracted from the WSDL
     * - documentation: References a Work-Study Award which is directly associated with the Job Profile.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Requirement_OptionObjectType
     */
    public $Requirement_Option_Reference;
    /**
     * The Allowed_Student_Award_Sources_Reference
     * Meta information extracted from the WSDL
     * - documentation: References an allowed Student Award Sources which is directly associated with the Job Profile.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Student_Award_SourceObjectType[]
     */
    public $Allowed_Student_Award_Sources_Reference;
    /**
     * Constructor method for Job_Profile_Work-Study_DataType
     * @uses Job_Profile_Work_Study_DataType::setRequirement_Option_Reference()
     * @uses Job_Profile_Work_Study_DataType::setAllowed_Student_Award_Sources_Reference()
     * @param \WorkdayWsdl\\StructType\Requirement_OptionObjectType $requirement_Option_Reference
     * @param \WorkdayWsdl\\StructType\Student_Award_SourceObjectType[] $allowed_Student_Award_Sources_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Requirement_OptionObjectType $requirement_Option_Reference = null, array $allowed_Student_Award_Sources_Reference = array())
    {
        $this
            ->setRequirement_Option_Reference($requirement_Option_Reference)
            ->setAllowed_Student_Award_Sources_Reference($allowed_Student_Award_Sources_Reference);
    }
    /**
     * Get Requirement_Option_Reference value
     * @return \WorkdayWsdl\\StructType\Requirement_OptionObjectType|null
     */
    public function getRequirement_Option_Reference()
    {
        return $this->Requirement_Option_Reference;
    }
    /**
     * Set Requirement_Option_Reference value
     * @param \WorkdayWsdl\\StructType\Requirement_OptionObjectType $requirement_Option_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Work_Study_DataType
     */
    public function setRequirement_Option_Reference(\WorkdayWsdl\\StructType\Requirement_OptionObjectType $requirement_Option_Reference = null)
    {
        $this->Requirement_Option_Reference = $requirement_Option_Reference;
        return $this;
    }
    /**
     * Get Allowed_Student_Award_Sources_Reference value
     * @return \WorkdayWsdl\\StructType\Student_Award_SourceObjectType[]|null
     */
    public function getAllowed_Student_Award_Sources_Reference()
    {
        return $this->Allowed_Student_Award_Sources_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAllowed_Student_Award_Sources_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllowed_Student_Award_Sources_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAllowed_Student_Award_Sources_ReferenceForArrayConstraintsFromSetAllowed_Student_Award_Sources_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem instanceof \WorkdayWsdl\\StructType\Student_Award_SourceObjectType) {
                $invalidValues[] = is_object($job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem) ? get_class($job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem), var_export($job_Profile_Work_Study_DataTypeAllowed_Student_Award_Sources_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Allowed_Student_Award_Sources_Reference property can only contain items of type \WorkdayWsdl\\StructType\Student_Award_SourceObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Allowed_Student_Award_Sources_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Student_Award_SourceObjectType[] $allowed_Student_Award_Sources_Reference
     * @return \WorkdayWsdl\\StructType\Job_Profile_Work_Study_DataType
     */
    public function setAllowed_Student_Award_Sources_Reference(array $allowed_Student_Award_Sources_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($allowed_Student_Award_Sources_ReferenceArrayErrorMessage = self::validateAllowed_Student_Award_Sources_ReferenceForArrayConstraintsFromSetAllowed_Student_Award_Sources_Reference($allowed_Student_Award_Sources_Reference))) {
            throw new \InvalidArgumentException($allowed_Student_Award_Sources_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Allowed_Student_Award_Sources_Reference = $allowed_Student_Award_Sources_Reference;
        return $this;
    }
    /**
     * Add item to Allowed_Student_Award_Sources_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Student_Award_SourceObjectType $item
     * @return \WorkdayWsdl\\StructType\Job_Profile_Work_Study_DataType
     */
    public function addToAllowed_Student_Award_Sources_Reference(\WorkdayWsdl\\StructType\Student_Award_SourceObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Student_Award_SourceObjectType) {
            throw new \InvalidArgumentException(sprintf('The Allowed_Student_Award_Sources_Reference property can only contain items of type \WorkdayWsdl\\StructType\Student_Award_SourceObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Allowed_Student_Award_Sources_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Job_Profile_Work_Study_DataType
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
