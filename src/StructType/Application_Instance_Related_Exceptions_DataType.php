<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Application_Instance_Related_Exceptions_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Exceptions Data
 * @subpackage Structs
 */
class Application_Instance_Related_Exceptions_DataType extends AbstractStructBase
{
    /**
     * The Exceptions_Data
     * Meta information extracted from the WSDL
     * - documentation: Exceptions Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType[]
     */
    public $Exceptions_Data;
    /**
     * Constructor method for Application_Instance_Related_Exceptions_DataType
     * @uses Application_Instance_Related_Exceptions_DataType::setExceptions_Data()
     * @param \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType[] $exceptions_Data
     */
    public function __construct(array $exceptions_Data = array())
    {
        $this
            ->setExceptions_Data($exceptions_Data);
    }
    /**
     * Get Exceptions_Data value
     * @return \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType[]|null
     */
    public function getExceptions_Data()
    {
        return $this->Exceptions_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setExceptions_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExceptions_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExceptions_DataForArrayConstraintsFromSetExceptions_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $application_Instance_Related_Exceptions_DataTypeExceptions_DataItem) {
            // validation for constraint: itemType
            if (!$application_Instance_Related_Exceptions_DataTypeExceptions_DataItem instanceof \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType) {
                $invalidValues[] = is_object($application_Instance_Related_Exceptions_DataTypeExceptions_DataItem) ? get_class($application_Instance_Related_Exceptions_DataTypeExceptions_DataItem) : sprintf('%s(%s)', gettype($application_Instance_Related_Exceptions_DataTypeExceptions_DataItem), var_export($application_Instance_Related_Exceptions_DataTypeExceptions_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Exceptions_Data property can only contain items of type \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Exceptions_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType[] $exceptions_Data
     * @return \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType
     */
    public function setExceptions_Data(array $exceptions_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($exceptions_DataArrayErrorMessage = self::validateExceptions_DataForArrayConstraintsFromSetExceptions_Data($exceptions_Data))) {
            throw new \InvalidArgumentException($exceptions_DataArrayErrorMessage, __LINE__);
        }
        $this->Exceptions_Data = $exceptions_Data;
        return $this;
    }
    /**
     * Add item to Exceptions_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType $item
     * @return \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType
     */
    public function addToExceptions_Data(\WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType) {
            throw new \InvalidArgumentException(sprintf('The Exceptions_Data property can only contain items of type \WorkdayWsdl\\StructType\Application_Instance_Exceptions_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Exceptions_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Application_Instance_Related_Exceptions_DataType
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
