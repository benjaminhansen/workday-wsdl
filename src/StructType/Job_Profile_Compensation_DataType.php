<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Compensation_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element contains Compensation related data for the Job Profile. Currently, only an optional Compensation Grade association for the Job Profile is available.
 * @subpackage Structs
 */
class Job_Profile_Compensation_DataType extends AbstractStructBase
{
    /**
     * The Compensation_Grade_Reference
     * Meta information extracted from the WSDL
     * - documentation: References an active Compensation Grade which is directly associated with the Job Profile. Workers with this Job Profile will be able to be assigned this Compensation Grade by default.
     * - minOccurs: 0
     * @var \StructType\Compensation_GradeObjectType
     */
    public $Compensation_Grade_Reference;
    /**
     * The Compensation_Grade_Profile_Reference
     * Meta information extracted from the WSDL
     * - documentation: References active Compensation Grade Profiles which are directly associated with the Job Profile. Workers with this Job Profile will be able to be assigned a Compensation Grade Profile from the associated list based on eligibility.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Compensation_Grade_ProfileObjectType[]
     */
    public $Compensation_Grade_Profile_Reference;
    /**
     * Constructor method for Job_Profile_Compensation_DataType
     * @uses Job_Profile_Compensation_DataType::setCompensation_Grade_Reference()
     * @uses Job_Profile_Compensation_DataType::setCompensation_Grade_Profile_Reference()
     * @param \StructType\Compensation_GradeObjectType $compensation_Grade_Reference
     * @param \StructType\Compensation_Grade_ProfileObjectType[] $compensation_Grade_Profile_Reference
     */
    public function __construct(\StructType\Compensation_GradeObjectType $compensation_Grade_Reference = null, array $compensation_Grade_Profile_Reference = array())
    {
        $this
            ->setCompensation_Grade_Reference($compensation_Grade_Reference)
            ->setCompensation_Grade_Profile_Reference($compensation_Grade_Profile_Reference);
    }
    /**
     * Get Compensation_Grade_Reference value
     * @return \StructType\Compensation_GradeObjectType|null
     */
    public function getCompensation_Grade_Reference()
    {
        return $this->Compensation_Grade_Reference;
    }
    /**
     * Set Compensation_Grade_Reference value
     * @param \StructType\Compensation_GradeObjectType $compensation_Grade_Reference
     * @return \StructType\Job_Profile_Compensation_DataType
     */
    public function setCompensation_Grade_Reference(\StructType\Compensation_GradeObjectType $compensation_Grade_Reference = null)
    {
        $this->Compensation_Grade_Reference = $compensation_Grade_Reference;
        return $this;
    }
    /**
     * Get Compensation_Grade_Profile_Reference value
     * @return \StructType\Compensation_Grade_ProfileObjectType[]|null
     */
    public function getCompensation_Grade_Profile_Reference()
    {
        return $this->Compensation_Grade_Profile_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setCompensation_Grade_Profile_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompensation_Grade_Profile_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompensation_Grade_Profile_ReferenceForArrayConstraintsFromSetCompensation_Grade_Profile_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem instanceof \StructType\Compensation_Grade_ProfileObjectType) {
                $invalidValues[] = is_object($job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem) ? get_class($job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem), var_export($job_Profile_Compensation_DataTypeCompensation_Grade_Profile_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Compensation_Grade_Profile_Reference property can only contain items of type \StructType\Compensation_Grade_ProfileObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Compensation_Grade_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Compensation_Grade_ProfileObjectType[] $compensation_Grade_Profile_Reference
     * @return \StructType\Job_Profile_Compensation_DataType
     */
    public function setCompensation_Grade_Profile_Reference(array $compensation_Grade_Profile_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($compensation_Grade_Profile_ReferenceArrayErrorMessage = self::validateCompensation_Grade_Profile_ReferenceForArrayConstraintsFromSetCompensation_Grade_Profile_Reference($compensation_Grade_Profile_Reference))) {
            throw new \InvalidArgumentException($compensation_Grade_Profile_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Compensation_Grade_Profile_Reference = $compensation_Grade_Profile_Reference;
        return $this;
    }
    /**
     * Add item to Compensation_Grade_Profile_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Compensation_Grade_ProfileObjectType $item
     * @return \StructType\Job_Profile_Compensation_DataType
     */
    public function addToCompensation_Grade_Profile_Reference(\StructType\Compensation_Grade_ProfileObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Compensation_Grade_ProfileObjectType) {
            throw new \InvalidArgumentException(sprintf('The Compensation_Grade_Profile_Reference property can only contain items of type \StructType\Compensation_Grade_ProfileObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Compensation_Grade_Profile_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_Compensation_DataType
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
