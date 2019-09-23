<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Qualification_ReplacementType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Training Qualifications. Allows all training qualifications for a Job Profile or Position Restriction to be removed - or to replace all existing training qualifications with those sent in the web service.
 * @subpackage Structs
 */
class Training_Qualification_ReplacementType extends AbstractStructBase
{
    /**
     * The Training_Qualification_Replacement_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Training_Qualification_Profile_Replacement_DataType[]
     */
    public $Training_Qualification_Replacement_Data;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: If Y, deletes training qualifications for the position restriction or job profile.
     * @var bool
     */
    public $Delete;
    /**
     * Constructor method for Training_Qualification_ReplacementType
     * @uses Training_Qualification_ReplacementType::setTraining_Qualification_Replacement_Data()
     * @uses Training_Qualification_ReplacementType::setDelete()
     * @param \StructType\Training_Qualification_Profile_Replacement_DataType[] $training_Qualification_Replacement_Data
     * @param bool $delete
     */
    public function __construct(array $training_Qualification_Replacement_Data = array(), $delete = null)
    {
        $this
            ->setTraining_Qualification_Replacement_Data($training_Qualification_Replacement_Data)
            ->setDelete($delete);
    }
    /**
     * Get Training_Qualification_Replacement_Data value
     * @return \StructType\Training_Qualification_Profile_Replacement_DataType[]|null
     */
    public function getTraining_Qualification_Replacement_Data()
    {
        return $this->Training_Qualification_Replacement_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining_Qualification_Replacement_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining_Qualification_Replacement_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraining_Qualification_Replacement_DataForArrayConstraintsFromSetTraining_Qualification_Replacement_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem) {
            // validation for constraint: itemType
            if (!$training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem instanceof \StructType\Training_Qualification_Profile_Replacement_DataType) {
                $invalidValues[] = is_object($training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem) ? get_class($training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem) : sprintf('%s(%s)', gettype($training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem), var_export($training_Qualification_ReplacementTypeTraining_Qualification_Replacement_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training_Qualification_Replacement_Data property can only contain items of type \StructType\Training_Qualification_Profile_Replacement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Qualification_Profile_Replacement_DataType[] $training_Qualification_Replacement_Data
     * @return \StructType\Training_Qualification_ReplacementType
     */
    public function setTraining_Qualification_Replacement_Data(array $training_Qualification_Replacement_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($training_Qualification_Replacement_DataArrayErrorMessage = self::validateTraining_Qualification_Replacement_DataForArrayConstraintsFromSetTraining_Qualification_Replacement_Data($training_Qualification_Replacement_Data))) {
            throw new \InvalidArgumentException($training_Qualification_Replacement_DataArrayErrorMessage, __LINE__);
        }
        $this->Training_Qualification_Replacement_Data = $training_Qualification_Replacement_Data;
        return $this;
    }
    /**
     * Add item to Training_Qualification_Replacement_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Qualification_Profile_Replacement_DataType $item
     * @return \StructType\Training_Qualification_ReplacementType
     */
    public function addToTraining_Qualification_Replacement_Data(\StructType\Training_Qualification_Profile_Replacement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Training_Qualification_Profile_Replacement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Training_Qualification_Replacement_Data property can only contain items of type \StructType\Training_Qualification_Profile_Replacement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training_Qualification_Replacement_Data[] = $item;
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
     * @return \StructType\Training_Qualification_ReplacementType
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
     * @return \StructType\Training_Qualification_ReplacementType
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
