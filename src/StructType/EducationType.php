<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EducationType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Education information.
 * @subpackage Structs
 */
class EducationType extends AbstractStructBase
{
    /**
     * The Education_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the education profile.
     * - minOccurs: 0
     * @var \StructType\Education_SkillObjectType
     */
    public $Education_Reference;
    /**
     * The Education_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Education_Achievement_DataType[]
     */
    public $Education_Data;
    /**
     * Constructor method for EducationType
     * @uses EducationType::setEducation_Reference()
     * @uses EducationType::setEducation_Data()
     * @param \StructType\Education_SkillObjectType $education_Reference
     * @param \StructType\Education_Achievement_DataType[] $education_Data
     */
    public function __construct(\StructType\Education_SkillObjectType $education_Reference = null, array $education_Data = array())
    {
        $this
            ->setEducation_Reference($education_Reference)
            ->setEducation_Data($education_Data);
    }
    /**
     * Get Education_Reference value
     * @return \StructType\Education_SkillObjectType|null
     */
    public function getEducation_Reference()
    {
        return $this->Education_Reference;
    }
    /**
     * Set Education_Reference value
     * @param \StructType\Education_SkillObjectType $education_Reference
     * @return \StructType\EducationType
     */
    public function setEducation_Reference(\StructType\Education_SkillObjectType $education_Reference = null)
    {
        $this->Education_Reference = $education_Reference;
        return $this;
    }
    /**
     * Get Education_Data value
     * @return \StructType\Education_Achievement_DataType[]|null
     */
    public function getEducation_Data()
    {
        return $this->Education_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEducation_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEducation_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEducation_DataForArrayConstraintsFromSetEducation_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $educationTypeEducation_DataItem) {
            // validation for constraint: itemType
            if (!$educationTypeEducation_DataItem instanceof \StructType\Education_Achievement_DataType) {
                $invalidValues[] = is_object($educationTypeEducation_DataItem) ? get_class($educationTypeEducation_DataItem) : sprintf('%s(%s)', gettype($educationTypeEducation_DataItem), var_export($educationTypeEducation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Education_Data property can only contain items of type \StructType\Education_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Education_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Education_Achievement_DataType[] $education_Data
     * @return \StructType\EducationType
     */
    public function setEducation_Data(array $education_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($education_DataArrayErrorMessage = self::validateEducation_DataForArrayConstraintsFromSetEducation_Data($education_Data))) {
            throw new \InvalidArgumentException($education_DataArrayErrorMessage, __LINE__);
        }
        $this->Education_Data = $education_Data;
        return $this;
    }
    /**
     * Add item to Education_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Education_Achievement_DataType $item
     * @return \StructType\EducationType
     */
    public function addToEducation_Data(\StructType\Education_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Education_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Education_Data property can only contain items of type \StructType\Education_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Education_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EducationType
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
