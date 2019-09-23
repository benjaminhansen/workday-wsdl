<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Training_Type_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Get Training Types
 * @subpackage Structs
 */
class Training_Type_Response_DataType extends AbstractStructBase
{
    /**
     * The Training_Type
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Training Type data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Training_TypeType[]
     */
    public $Training_Type;
    /**
     * Constructor method for Training_Type_Response_DataType
     * @uses Training_Type_Response_DataType::setTraining_Type()
     * @param \StructType\Training_TypeType[] $training_Type
     */
    public function __construct(array $training_Type = array())
    {
        $this
            ->setTraining_Type($training_Type);
    }
    /**
     * Get Training_Type value
     * @return \StructType\Training_TypeType[]|null
     */
    public function getTraining_Type()
    {
        return $this->Training_Type;
    }
    /**
     * This method is responsible for validating the values passed to the setTraining_Type method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTraining_Type method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTraining_TypeForArrayConstraintsFromSetTraining_Type(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $training_Type_Response_DataTypeTraining_TypeItem) {
            // validation for constraint: itemType
            if (!$training_Type_Response_DataTypeTraining_TypeItem instanceof \StructType\Training_TypeType) {
                $invalidValues[] = is_object($training_Type_Response_DataTypeTraining_TypeItem) ? get_class($training_Type_Response_DataTypeTraining_TypeItem) : sprintf('%s(%s)', gettype($training_Type_Response_DataTypeTraining_TypeItem), var_export($training_Type_Response_DataTypeTraining_TypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Training_Type property can only contain items of type \StructType\Training_TypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Training_Type value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_TypeType[] $training_Type
     * @return \StructType\Training_Type_Response_DataType
     */
    public function setTraining_Type(array $training_Type = array())
    {
        // validation for constraint: array
        if ('' !== ($training_TypeArrayErrorMessage = self::validateTraining_TypeForArrayConstraintsFromSetTraining_Type($training_Type))) {
            throw new \InvalidArgumentException($training_TypeArrayErrorMessage, __LINE__);
        }
        $this->Training_Type = $training_Type;
        return $this;
    }
    /**
     * Add item to Training_Type value
     * @throws \InvalidArgumentException
     * @param \StructType\Training_TypeType $item
     * @return \StructType\Training_Type_Response_DataType
     */
    public function addToTraining_Type(\StructType\Training_TypeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Training_TypeType) {
            throw new \InvalidArgumentException(sprintf('The Training_Type property can only contain items of type \StructType\Training_TypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Training_Type[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Training_Type_Response_DataType
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
