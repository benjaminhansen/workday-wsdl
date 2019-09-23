<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_TypeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Training Type Response Data
 * @subpackage Structs
 */
class Training_TypeType extends AbstractStructBase
{
    /**
     * The Training_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a Training Type.
     * - minOccurs: 0
     * @var \StructType\Training_TypeObjectType
     */
    public $Training_Type_Reference;
    /**
     * The Training_Type_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the detailed information about a Training Type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Training_Type_DataType[]
     */
    public $Training_Type_Data;
    /**
     * Constructor method for Training_TypeType
     * @uses Training_TypeType::setTraining_Type_Reference()
     * @uses Training_TypeType::setTraining_Type_Data()
     * @param \StructType\Training_TypeObjectType $training_Type_Reference
     * @param \StructType\Training_Type_DataType[] $training_Type_Data
     */
    public function __construct(\StructType\Training_TypeObjectType $training_Type_Reference = null, array $training_Type_Data = array())
    {
        $this
            ->setTraining_Type_Reference($training_Type_Reference)
            ->setTraining_Type_Data($training_Type_Data);
    }
    /**
     * Get Training_Type_Reference value
     * @return \StructType\Training_TypeObjectType|null
     */
    public function getTraining_Type_Reference()
    {
        return $this->Training_Type_Reference;
    }
    /**
     * Set Training_Type_Reference value
     * @param \StructType\Training_TypeObjectType $training_Type_Reference
     * @return \StructType\Training_TypeType
     */
    public function setTraining_Type_Reference(\StructType\Training_TypeObjectType $training_Type_Reference = null)
    {
        $this->Training_Type_Reference = $training_Type_Reference;
        return $this;
    }
    /**
     * Get Training_Type_Data value
     * @return \StructType\Training_Type_DataType[]|null
     */
    public function getTraining_Type_Data()
    {
        return $this->Training_Type_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining_Type_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining_Type_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraining_Type_DataForArrayConstraintsFromSetTraining_Type_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $training_TypeTypeTraining_Type_DataItem) {
            // validation for constraint: itemType
            if (!$training_TypeTypeTraining_Type_DataItem instanceof \StructType\Training_Type_DataType) {
                $invalidValues[] = is_object($training_TypeTypeTraining_Type_DataItem) ? get_class($training_TypeTypeTraining_Type_DataItem) : sprintf('%s(%s)', gettype($training_TypeTypeTraining_Type_DataItem), var_export($training_TypeTypeTraining_Type_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training_Type_Data property can only contain items of type \StructType\Training_Type_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Type_DataType[] $training_Type_Data
     * @return \StructType\Training_TypeType
     */
    public function setTraining_Type_Data(array $training_Type_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($training_Type_DataArrayErrorMessage = self::validateTraining_Type_DataForArrayConstraintsFromSetTraining_Type_Data($training_Type_Data))) {
            throw new \InvalidArgumentException($training_Type_DataArrayErrorMessage, __LINE__);
        }
        $this->Training_Type_Data = $training_Type_Data;
        return $this;
    }
    /**
     * Add item to Training_Type_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Type_DataType $item
     * @return \StructType\Training_TypeType
     */
    public function addToTraining_Type_Data(\StructType\Training_Type_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Training_Type_DataType) {
            throw new \InvalidArgumentException(sprintf('The Training_Type_Data property can only contain items of type \StructType\Training_Type_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training_Type_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Training_TypeType
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
