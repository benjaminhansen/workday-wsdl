<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Job_Profile_Union_Membership_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container For Union Membership Data
 * @subpackage Structs
 */
class Job_Profile_Union_Membership_DataType extends AbstractStructBase
{
    /**
     * The Requirement_Option_Reference
     * Meta information extracted from the WSDL
     * - documentation: References an active Union Membership which is directly associated with the Job Profile.
     * - minOccurs: 0
     * @var \StructType\Requirement_OptionObjectType
     */
    public $Requirement_Option_Reference;
    /**
     * The Union_Reference
     * Meta information extracted from the WSDL
     * - documentation: References an active Allowed Unions which is directly associated with the Job Profile.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\UnionObjectType[]
     */
    public $Union_Reference;
    /**
     * Constructor method for Job_Profile_Union_Membership_DataType
     * @uses Job_Profile_Union_Membership_DataType::setRequirement_Option_Reference()
     * @uses Job_Profile_Union_Membership_DataType::setUnion_Reference()
     * @param \StructType\Requirement_OptionObjectType $requirement_Option_Reference
     * @param \StructType\UnionObjectType[] $union_Reference
     */
    public function __construct(\StructType\Requirement_OptionObjectType $requirement_Option_Reference = null, array $union_Reference = array())
    {
        $this
            ->setRequirement_Option_Reference($requirement_Option_Reference)
            ->setUnion_Reference($union_Reference);
    }
    /**
     * Get Requirement_Option_Reference value
     * @return \StructType\Requirement_OptionObjectType|null
     */
    public function getRequirement_Option_Reference()
    {
        return $this->Requirement_Option_Reference;
    }
    /**
     * Set Requirement_Option_Reference value
     * @param \StructType\Requirement_OptionObjectType $requirement_Option_Reference
     * @return \StructType\Job_Profile_Union_Membership_DataType
     */
    public function setRequirement_Option_Reference(\StructType\Requirement_OptionObjectType $requirement_Option_Reference = null)
    {
        $this->Requirement_Option_Reference = $requirement_Option_Reference;
        return $this;
    }
    /**
     * Get Union_Reference value
     * @return \StructType\UnionObjectType[]|null
     */
    public function getUnion_Reference()
    {
        return $this->Union_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setUnion_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnion_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnion_ReferenceForArrayConstraintsFromSetUnion_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $job_Profile_Union_Membership_DataTypeUnion_ReferenceItem) {
            // validation for constraint: itemType
            if (!$job_Profile_Union_Membership_DataTypeUnion_ReferenceItem instanceof \StructType\UnionObjectType) {
                $invalidValues[] = is_object($job_Profile_Union_Membership_DataTypeUnion_ReferenceItem) ? get_class($job_Profile_Union_Membership_DataTypeUnion_ReferenceItem) : sprintf('%s(%s)', gettype($job_Profile_Union_Membership_DataTypeUnion_ReferenceItem), var_export($job_Profile_Union_Membership_DataTypeUnion_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Union_Reference property can only contain items of type \StructType\UnionObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Union_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\UnionObjectType[] $union_Reference
     * @return \StructType\Job_Profile_Union_Membership_DataType
     */
    public function setUnion_Reference(array $union_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($union_ReferenceArrayErrorMessage = self::validateUnion_ReferenceForArrayConstraintsFromSetUnion_Reference($union_Reference))) {
            throw new \InvalidArgumentException($union_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Union_Reference = $union_Reference;
        return $this;
    }
    /**
     * Add item to Union_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\UnionObjectType $item
     * @return \StructType\Job_Profile_Union_Membership_DataType
     */
    public function addToUnion_Reference(\StructType\UnionObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UnionObjectType) {
            throw new \InvalidArgumentException(sprintf('The Union_Reference property can only contain items of type \StructType\UnionObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Union_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Job_Profile_Union_Membership_DataType
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
