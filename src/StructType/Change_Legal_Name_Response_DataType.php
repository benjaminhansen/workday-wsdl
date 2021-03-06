<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Legal_Name_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Get Change Legal Name response
 * @subpackage Structs
 */
class Change_Legal_Name_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Legal_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType[]
     */
    public $Change_Legal_Name;
    /**
     * Constructor method for Change_Legal_Name_Response_DataType
     * @uses Change_Legal_Name_Response_DataType::setChange_Legal_Name()
     * @param \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType[] $change_Legal_Name
     */
    public function __construct(array $change_Legal_Name = array())
    {
        $this
            ->setChange_Legal_Name($change_Legal_Name);
    }
    /**
     * Get Change_Legal_Name value
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType[]|null
     */
    public function getChange_Legal_Name()
    {
        return $this->Change_Legal_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Legal_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Legal_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Legal_NameForArrayConstraintsFromSetChange_Legal_Name(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Legal_Name_Response_DataTypeChange_Legal_NameItem) {
            // validation for constraint: itemType
            if (!$change_Legal_Name_Response_DataTypeChange_Legal_NameItem instanceof \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType) {
                $invalidValues[] = is_object($change_Legal_Name_Response_DataTypeChange_Legal_NameItem) ? get_class($change_Legal_Name_Response_DataTypeChange_Legal_NameItem) : sprintf('%s(%s)', gettype($change_Legal_Name_Response_DataTypeChange_Legal_NameItem), var_export($change_Legal_Name_Response_DataTypeChange_Legal_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Legal_Name property can only contain items of type \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Legal_Name value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType[] $change_Legal_Name
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_DataType
     */
    public function setChange_Legal_Name(array $change_Legal_Name = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Legal_NameArrayErrorMessage = self::validateChange_Legal_NameForArrayConstraintsFromSetChange_Legal_Name($change_Legal_Name))) {
            throw new \InvalidArgumentException($change_Legal_NameArrayErrorMessage, __LINE__);
        }
        $this->Change_Legal_Name = $change_Legal_Name;
        return $this;
    }
    /**
     * Add item to Change_Legal_Name value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType $item
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_DataType
     */
    public function addToChange_Legal_Name(\WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Legal_Name property can only contain items of type \WorkdayWsdl\\StructType\Change_Legal_Name_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Legal_Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Legal_Name_Response_DataType
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
