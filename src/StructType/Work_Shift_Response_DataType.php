<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Shift_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element that includes Work Shift reference instance and Work Shift data.
 * @subpackage Structs
 */
class Work_Shift_Response_DataType extends AbstractStructBase
{
    /**
     * The Work_Shift
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_ShiftType[]
     */
    public $Work_Shift;
    /**
     * Constructor method for Work_Shift_Response_DataType
     * @uses Work_Shift_Response_DataType::setWork_Shift()
     * @param \StructType\Work_ShiftType[] $work_Shift
     */
    public function __construct(array $work_Shift = array())
    {
        $this
            ->setWork_Shift($work_Shift);
    }
    /**
     * Get Work_Shift value
     * @return \StructType\Work_ShiftType[]|null
     */
    public function getWork_Shift()
    {
        return $this->Work_Shift;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Shift method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Shift method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_ShiftForArrayConstraintsFromSetWork_Shift(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Shift_Response_DataTypeWork_ShiftItem) {
            // validation for constraint: itemType
            if (!$work_Shift_Response_DataTypeWork_ShiftItem instanceof \StructType\Work_ShiftType) {
                $invalidValues[] = is_object($work_Shift_Response_DataTypeWork_ShiftItem) ? get_class($work_Shift_Response_DataTypeWork_ShiftItem) : sprintf('%s(%s)', gettype($work_Shift_Response_DataTypeWork_ShiftItem), var_export($work_Shift_Response_DataTypeWork_ShiftItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Shift property can only contain items of type \StructType\Work_ShiftType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Shift value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_ShiftType[] $work_Shift
     * @return \StructType\Work_Shift_Response_DataType
     */
    public function setWork_Shift(array $work_Shift = array())
    {
        // validation for constraint: array
        if ('' !== ($work_ShiftArrayErrorMessage = self::validateWork_ShiftForArrayConstraintsFromSetWork_Shift($work_Shift))) {
            throw new \InvalidArgumentException($work_ShiftArrayErrorMessage, __LINE__);
        }
        $this->Work_Shift = $work_Shift;
        return $this;
    }
    /**
     * Add item to Work_Shift value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_ShiftType $item
     * @return \StructType\Work_Shift_Response_DataType
     */
    public function addToWork_Shift(\StructType\Work_ShiftType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_ShiftType) {
            throw new \InvalidArgumentException(sprintf('The Work_Shift property can only contain items of type \StructType\Work_ShiftType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Shift[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Shift_Response_DataType
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
