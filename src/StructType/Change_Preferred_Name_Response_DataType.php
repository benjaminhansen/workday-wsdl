<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Preferred_Name_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing the worker data for the Get Change Preferred Name response
 * @subpackage Structs
 */
class Change_Preferred_Name_Response_DataType extends AbstractStructBase
{
    /**
     * The Change_Preferred_Name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Change_Preferred_Name_Response_WrapperType[]
     */
    public $Change_Preferred_Name;
    /**
     * Constructor method for Change_Preferred_Name_Response_DataType
     * @uses Change_Preferred_Name_Response_DataType::setChange_Preferred_Name()
     * @param \StructType\Change_Preferred_Name_Response_WrapperType[] $change_Preferred_Name
     */
    public function __construct(array $change_Preferred_Name = array())
    {
        $this
            ->setChange_Preferred_Name($change_Preferred_Name);
    }
    /**
     * Get Change_Preferred_Name value
     * @return \StructType\Change_Preferred_Name_Response_WrapperType[]|null
     */
    public function getChange_Preferred_Name()
    {
        return $this->Change_Preferred_Name;
    }
    /**
     * This method is responsible for validating the values passed to the setChange_Preferred_Name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChange_Preferred_Name method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChange_Preferred_NameForArrayConstraintsFromSetChange_Preferred_Name(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem) {
            // validation for constraint: itemType
            if (!$change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem instanceof \StructType\Change_Preferred_Name_Response_WrapperType) {
                $invalidValues[] = is_object($change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem) ? get_class($change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem) : sprintf('%s(%s)', gettype($change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem), var_export($change_Preferred_Name_Response_DataTypeChange_Preferred_NameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Change_Preferred_Name property can only contain items of type \StructType\Change_Preferred_Name_Response_WrapperType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Change_Preferred_Name value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Preferred_Name_Response_WrapperType[] $change_Preferred_Name
     * @return \StructType\Change_Preferred_Name_Response_DataType
     */
    public function setChange_Preferred_Name(array $change_Preferred_Name = array())
    {
        // validation for constraint: array
        if ('' !== ($change_Preferred_NameArrayErrorMessage = self::validateChange_Preferred_NameForArrayConstraintsFromSetChange_Preferred_Name($change_Preferred_Name))) {
            throw new \InvalidArgumentException($change_Preferred_NameArrayErrorMessage, __LINE__);
        }
        $this->Change_Preferred_Name = $change_Preferred_Name;
        return $this;
    }
    /**
     * Add item to Change_Preferred_Name value
     * @throws \InvalidArgumentException
     * @param \StructType\Change_Preferred_Name_Response_WrapperType $item
     * @return \StructType\Change_Preferred_Name_Response_DataType
     */
    public function addToChange_Preferred_Name(\StructType\Change_Preferred_Name_Response_WrapperType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Change_Preferred_Name_Response_WrapperType) {
            throw new \InvalidArgumentException(sprintf('The Change_Preferred_Name property can only contain items of type \StructType\Change_Preferred_Name_Response_WrapperType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Change_Preferred_Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Preferred_Name_Response_DataType
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
