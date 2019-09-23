<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Validation_FaultType StructType
 * @subpackage Structs
 */
class Validation_FaultType extends AbstractStructBase
{
    /**
     * The Validation_Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Validation_ErrorType[]
     */
    public $Validation_Error;
    /**
     * Constructor method for Validation_FaultType
     * @uses Validation_FaultType::setValidation_Error()
     * @param \StructType\Validation_ErrorType[] $validation_Error
     */
    public function __construct(array $validation_Error = array())
    {
        $this
            ->setValidation_Error($validation_Error);
    }
    /**
     * Get Validation_Error value
     * @return \StructType\Validation_ErrorType[]|null
     */
    public function getValidation_Error()
    {
        return $this->Validation_Error;
    }
    /**
     * This method is responsible for validating the values passed to the setValidation_Error method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValidation_Error method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValidation_ErrorForArrayConstraintsFromSetValidation_Error(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $validation_FaultTypeValidation_ErrorItem) {
            // validation for constraint: itemType
            if (!$validation_FaultTypeValidation_ErrorItem instanceof \StructType\Validation_ErrorType) {
                $invalidValues[] = is_object($validation_FaultTypeValidation_ErrorItem) ? get_class($validation_FaultTypeValidation_ErrorItem) : sprintf('%s(%s)', gettype($validation_FaultTypeValidation_ErrorItem), var_export($validation_FaultTypeValidation_ErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Validation_Error property can only contain items of type \StructType\Validation_ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Validation_Error value
     * @throws \InvalidArgumentException
     * @param \StructType\Validation_ErrorType[] $validation_Error
     * @return \StructType\Validation_FaultType
     */
    public function setValidation_Error(array $validation_Error = array())
    {
        // validation for constraint: array
        if ('' !== ($validation_ErrorArrayErrorMessage = self::validateValidation_ErrorForArrayConstraintsFromSetValidation_Error($validation_Error))) {
            throw new \InvalidArgumentException($validation_ErrorArrayErrorMessage, __LINE__);
        }
        $this->Validation_Error = $validation_Error;
        return $this;
    }
    /**
     * Add item to Validation_Error value
     * @throws \InvalidArgumentException
     * @param \StructType\Validation_ErrorType $item
     * @return \StructType\Validation_FaultType
     */
    public function addToValidation_Error(\StructType\Validation_ErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Validation_ErrorType) {
            throw new \InvalidArgumentException(sprintf('The Validation_Error property can only contain items of type \StructType\Validation_ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Validation_Error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Validation_FaultType
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
