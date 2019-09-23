<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrainingType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Training information.
 * @subpackage Structs
 */
class TrainingType extends AbstractStructBase
{
    /**
     * The Training_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Training information.
     * - minOccurs: 0
     * @var \StructType\TrainingObjectType
     */
    public $Training_Reference;
    /**
     * The Training_Data
     * Meta information extracted from the WSDL
     * - documentation: Wrapper element for Training information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Training_Achievement_DataType[]
     */
    public $Training_Data;
    /**
     * Constructor method for TrainingType
     * @uses TrainingType::setTraining_Reference()
     * @uses TrainingType::setTraining_Data()
     * @param \StructType\TrainingObjectType $training_Reference
     * @param \StructType\Training_Achievement_DataType[] $training_Data
     */
    public function __construct(\StructType\TrainingObjectType $training_Reference = null, array $training_Data = array())
    {
        $this
            ->setTraining_Reference($training_Reference)
            ->setTraining_Data($training_Data);
    }
    /**
     * Get Training_Reference value
     * @return \StructType\TrainingObjectType|null
     */
    public function getTraining_Reference()
    {
        return $this->Training_Reference;
    }
    /**
     * Set Training_Reference value
     * @param \StructType\TrainingObjectType $training_Reference
     * @return \StructType\TrainingType
     */
    public function setTraining_Reference(\StructType\TrainingObjectType $training_Reference = null)
    {
        $this->Training_Reference = $training_Reference;
        return $this;
    }
    /**
     * Get Training_Data value
     * @return \StructType\Training_Achievement_DataType[]|null
     */
    public function getTraining_Data()
    {
        return $this->Training_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraining_DataForArrayConstraintsFromSetTraining_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $trainingTypeTraining_DataItem) {
            // validation for constraint: itemType
            if (!$trainingTypeTraining_DataItem instanceof \StructType\Training_Achievement_DataType) {
                $invalidValues[] = is_object($trainingTypeTraining_DataItem) ? get_class($trainingTypeTraining_DataItem) : sprintf('%s(%s)', gettype($trainingTypeTraining_DataItem), var_export($trainingTypeTraining_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training_Data property can only contain items of type \StructType\Training_Achievement_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Achievement_DataType[] $training_Data
     * @return \StructType\TrainingType
     */
    public function setTraining_Data(array $training_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($training_DataArrayErrorMessage = self::validateTraining_DataForArrayConstraintsFromSetTraining_Data($training_Data))) {
            throw new \InvalidArgumentException($training_DataArrayErrorMessage, __LINE__);
        }
        $this->Training_Data = $training_Data;
        return $this;
    }
    /**
     * Add item to Training_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_Achievement_DataType $item
     * @return \StructType\TrainingType
     */
    public function addToTraining_Data(\StructType\Training_Achievement_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Training_Achievement_DataType) {
            throw new \InvalidArgumentException(sprintf('The Training_Data property can only contain items of type \StructType\Training_Achievement_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TrainingType
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
