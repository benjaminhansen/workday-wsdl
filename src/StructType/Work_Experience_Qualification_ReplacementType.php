<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Experience_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Work Experience Qualifications. Allows all work experience qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing work experience qualifications with those sent in the
 * web service.
 * @subpackage Structs
 */
class Work_Experience_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Work_Experience_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Experience_Qualification_Profile_Replacement_DataType[]
     */
    public $Work_Experience_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes all work experience qualifications for the position restriction or job profile, and doesn't send any additional work experience qualifications.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Work_Experience_Qualification_ReplacementType
     * @uses Work_Experience_Qualification_ReplacementType::setWork_Experience_Qualification_Replacement_Data()
     * @uses Work_Experience_Qualification_ReplacementType::setDelete()
     * @param \StructType\Work_Experience_Qualification_Profile_Replacement_DataType[] $work_Experience_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $work_Experience_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setWork_Experience_Qualification_Replacement_Data($work_Experience_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Work_Experience_Qualification_Replacement_Data value
     * @return \StructType\Work_Experience_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getWork_Experience_Qualification_Replacement_Data()
    {
        return $this->Work_Experience_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Experience_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Experience_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Experience_Qualification_Replacement_DataForArrayConstraintsFromSetWork_Experience_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem instanceof \StructType\Work_Experience_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem) ? get_class($work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem), var_export($work_Experience_Qualification_ReplacementTypeWork_Experience_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Experience_Qualification_Replacement_Data property can only contain items of type \StructType\Work_Experience_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Experience_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Experience_Qualification_Profile_Replacement_DataType[] $work_Experience_Qualification_Replacement_Data
     * @return \StructType\Work_Experience_Qualification_ReplacementType
     */
    public function setWork_Experience_Qualification_Replacement_Data(array $work_Experience_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Experience_Qualification_Replacement_DataArrayErrorMessage = self::validateWork_Experience_Qualification_Replacement_DataForArrayConstraintsFromSetWork_Experience_Qualification_Replacement_Data($work_Experience_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($work_Experience_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Work_Experience_Qualification_Replacement_Data = $work_Experience_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Work_Experience_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Experience_Qualification_Profile_Replacement_DataType $item
     * @return \StructType\Work_Experience_Qualification_ReplacementType
     */
    public function addToWork_Experience_Qualification_Replacement_Data(\StructType\Work_Experience_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Experience_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Experience_Qualification_Replacement_Data property can only contain items of type \StructType\Work_Experience_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Experience_Qualification_Replacement_Data[] = $item;
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
     * @return \StructType\Work_Experience_Qualification_ReplacementType
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
     * @return \StructType\Work_Experience_Qualification_ReplacementType
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
