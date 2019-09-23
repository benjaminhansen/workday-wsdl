<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Application_Instance_Exceptions_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing application related exceptions data
 * @subpackage Structs
 */
class Application_Instance_Exceptions_DataType extends AbstractStructBase
{
    /**
     * The Exception_Data
     * Meta information extracted from the WSDL
     * - documentation: Exception Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Exception_DataType[]
     */
    public $Exception_Data;
    /**
     * Constructor method for Application_Instance_Exceptions_DataType
     * @uses Application_Instance_Exceptions_DataType::setException_Data()
     * @param \StructType\Exception_DataType[] $exception_Data
     */
    public function __construct(array $exception_Data = array())
    {
        $this
            ->setException_Data($exception_Data);
    }
    /**
     * Get Exception_Data value
     * @return \StructType\Exception_DataType[]|null
     */
    public function getException_Data()
    {
        return $this->Exception_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setException_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setException_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateException_DataForArrayConstraintsFromSetException_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $application_Instance_Exceptions_DataTypeException_DataItem) {
            // validation for constraint: itemType
            if (!$application_Instance_Exceptions_DataTypeException_DataItem instanceof \StructType\Exception_DataType) {
                $invalidValues[] = is_object($application_Instance_Exceptions_DataTypeException_DataItem) ? get_class($application_Instance_Exceptions_DataTypeException_DataItem) : sprintf('%s(%s)', gettype($application_Instance_Exceptions_DataTypeException_DataItem), var_export($application_Instance_Exceptions_DataTypeException_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Exception_Data property can only contain items of type \StructType\Exception_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Exception_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Exception_DataType[] $exception_Data
     * @return \StructType\Application_Instance_Exceptions_DataType
     */
    public function setException_Data(array $exception_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($exception_DataArrayErrorMessage = self::validateException_DataForArrayConstraintsFromSetException_Data($exception_Data))) {
            throw new \InvalidArgumentException($exception_DataArrayErrorMessage, __LINE__);
        }
        $this->Exception_Data = $exception_Data;
        return $this;
    }
    /**
     * Add item to Exception_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Exception_DataType $item
     * @return \StructType\Application_Instance_Exceptions_DataType
     */
    public function addToException_Data(\StructType\Exception_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Exception_DataType) {
            throw new \InvalidArgumentException(sprintf('The Exception_Data property can only contain items of type \StructType\Exception_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Exception_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Application_Instance_Exceptions_DataType
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
