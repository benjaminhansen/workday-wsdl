<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Qualification_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Qualification data.
 * @subpackage Structs
 */
class Qualification_DataType extends AbstractStructBase
{
    /**
     * The Education_Data
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Education data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Education_History_DataType[]
     */
    public $Education_Data;
    /**
     * The Professional_Experience_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Professional_Experience_DataType[]
     */
    public $Professional_Experience_Data;
    /**
     * Constructor method for Qualification_DataType
     * @uses Qualification_DataType::setEducation_Data()
     * @uses Qualification_DataType::setProfessional_Experience_Data()
     * @param \StructType\Education_History_DataType[] $education_Data
     * @param \StructType\Professional_Experience_DataType[] $professional_Experience_Data
     */
    public function __construct(array $education_Data = array(), array $professional_Experience_Data = array())
    {
        $this
            ->setEducation_Data($education_Data)
            ->setProfessional_Experience_Data($professional_Experience_Data);
    }
    /**
     * Get Education_Data value
     * @return \StructType\Education_History_DataType[]|null
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
        foreach ($values as $qualification_DataTypeEducation_DataItem) {
            // validation for constraint: itemType
            if (!$qualification_DataTypeEducation_DataItem instanceof \StructType\Education_History_DataType) {
                $invalidValues[] = is_object($qualification_DataTypeEducation_DataItem) ? get_class($qualification_DataTypeEducation_DataItem) : sprintf('%s(%s)', gettype($qualification_DataTypeEducation_DataItem), var_export($qualification_DataTypeEducation_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Education_Data property can only contain items of type \StructType\Education_History_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Education_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Education_History_DataType[] $education_Data
     * @return \StructType\Qualification_DataType
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
     * @param \StructType\Education_History_DataType $item
     * @return \StructType\Qualification_DataType
     */
    public function addToEducation_Data(\StructType\Education_History_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Education_History_DataType) {
            throw new \InvalidArgumentException(sprintf('The Education_Data property can only contain items of type \StructType\Education_History_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Education_Data[] = $item;
        return $this;
    }
    /**
     * Get Professional_Experience_Data value
     * @return \StructType\Professional_Experience_DataType[]|null
     */
    public function getProfessional_Experience_Data()
    {
        return $this->Professional_Experience_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setProfessional_Experience_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfessional_Experience_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfessional_Experience_DataForArrayConstraintsFromSetProfessional_Experience_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $qualification_DataTypeProfessional_Experience_DataItem) {
            // validation for constraint: itemType
            if (!$qualification_DataTypeProfessional_Experience_DataItem instanceof \StructType\Professional_Experience_DataType) {
                $invalidValues[] = is_object($qualification_DataTypeProfessional_Experience_DataItem) ? get_class($qualification_DataTypeProfessional_Experience_DataItem) : sprintf('%s(%s)', gettype($qualification_DataTypeProfessional_Experience_DataItem), var_export($qualification_DataTypeProfessional_Experience_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Professional_Experience_Data property can only contain items of type \StructType\Professional_Experience_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Professional_Experience_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Professional_Experience_DataType[] $professional_Experience_Data
     * @return \StructType\Qualification_DataType
     */
    public function setProfessional_Experience_Data(array $professional_Experience_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($professional_Experience_DataArrayErrorMessage = self::validateProfessional_Experience_DataForArrayConstraintsFromSetProfessional_Experience_Data($professional_Experience_Data))) {
            throw new \InvalidArgumentException($professional_Experience_DataArrayErrorMessage, __LINE__);
        }
        $this->Professional_Experience_Data = $professional_Experience_Data;
        return $this;
    }
    /**
     * Add item to Professional_Experience_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Professional_Experience_DataType $item
     * @return \StructType\Qualification_DataType
     */
    public function addToProfessional_Experience_Data(\StructType\Professional_Experience_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Professional_Experience_DataType) {
            throw new \InvalidArgumentException(sprintf('The Professional_Experience_Data property can only contain items of type \StructType\Professional_Experience_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Professional_Experience_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Qualification_DataType
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
