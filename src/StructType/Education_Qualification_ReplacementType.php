<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Education_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Education Qualifications. Allows all education qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing education qualifications with those sent in the web service.
 * @subpackage Structs
 */
class Education_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Education_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType[]
     */
    public $Education_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes all education qualifications for the position restriction or job profile, and doesn't send any additional work experience qualifications.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Education_Qualification_ReplacementType
     * @uses Education_Qualification_ReplacementType::setEducation_Qualification_Replacement_Data()
     * @uses Education_Qualification_ReplacementType::setDelete()
     * @param \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType[] $education_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $education_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setEducation_Qualification_Replacement_Data($education_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Education_Qualification_Replacement_Data value
     * @return \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getEducation_Qualification_Replacement_Data()
    {
        return $this->Education_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEducation_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEducation_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEducation_Qualification_Replacement_DataForArrayConstraintsFromSetEducation_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem instanceof \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem) ? get_class($education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem), var_export($education_Qualification_ReplacementTypeEducation_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Education_Qualification_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Education_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType[] $education_Qualification_Replacement_Data
     * @return \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType
     */
    public function setEducation_Qualification_Replacement_Data(array $education_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($education_Qualification_Replacement_DataArrayErrorMessage = self::validateEducation_Qualification_Replacement_DataForArrayConstraintsFromSetEducation_Qualification_Replacement_Data($education_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($education_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Education_Qualification_Replacement_Data = $education_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Education_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType $item
     * @return \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType
     */
    public function addToEducation_Qualification_Replacement_Data(\WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Education_Qualification_Replacement_Data property can only contain items of type \WorkdayWsdl\\StructType\Education_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Education_Qualification_Replacement_Data[] = $item;
        return $this;
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Education_Qualification_ReplacementType
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
