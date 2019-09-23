<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_ShiftType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing work shift reference and data.
 * @subpackage Structs
 */
class Work_ShiftType extends AbstractStructBase
{
    /**
     * The Work_Shift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Work Shift.
     * - minOccurs: 0
     * @var \StructType\Work_ShiftObjectType
     */
    public $Work_Shift_Reference;
    /**
     * The Work_Shift_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Shift_DataType[]
     */
    public $Work_Shift_Data;
    /**
     * Constructor method for Work_ShiftType
     * @uses Work_ShiftType::setWork_Shift_Reference()
     * @uses Work_ShiftType::setWork_Shift_Data()
     * @param \StructType\Work_ShiftObjectType $work_Shift_Reference
     * @param \StructType\Work_Shift_DataType[] $work_Shift_Data
     */
    public function __construct(\StructType\Work_ShiftObjectType $work_Shift_Reference = null, array $work_Shift_Data = array())
    {
        $this
            ->setWork_Shift_Reference($work_Shift_Reference)
            ->setWork_Shift_Data($work_Shift_Data);
    }
    /**
     * Get Work_Shift_Reference value
     * @return \StructType\Work_ShiftObjectType|null
     */
    public function getWork_Shift_Reference()
    {
        return $this->Work_Shift_Reference;
    }
    /**
     * Set Work_Shift_Reference value
     * @param \StructType\Work_ShiftObjectType $work_Shift_Reference
     * @return \StructType\Work_ShiftType
     */
    public function setWork_Shift_Reference(\StructType\Work_ShiftObjectType $work_Shift_Reference = null)
    {
        $this->Work_Shift_Reference = $work_Shift_Reference;
        return $this;
    }
    /**
     * Get Work_Shift_Data value
     * @return \StructType\Work_Shift_DataType[]|null
     */
    public function getWork_Shift_Data()
    {
        return $this->Work_Shift_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Shift_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Shift_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Shift_DataForArrayConstraintsFromSetWork_Shift_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_ShiftTypeWork_Shift_DataItem) {
            // validation for constraint: itemType
            if (!$work_ShiftTypeWork_Shift_DataItem instanceof \StructType\Work_Shift_DataType) {
                $invalidValues[] = is_object($work_ShiftTypeWork_Shift_DataItem) ? get_class($work_ShiftTypeWork_Shift_DataItem) : sprintf('%s(%s)', gettype($work_ShiftTypeWork_Shift_DataItem), var_export($work_ShiftTypeWork_Shift_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Shift_Data property can only contain items of type \StructType\Work_Shift_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Shift_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Shift_DataType[] $work_Shift_Data
     * @return \StructType\Work_ShiftType
     */
    public function setWork_Shift_Data(array $work_Shift_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Shift_DataArrayErrorMessage = self::validateWork_Shift_DataForArrayConstraintsFromSetWork_Shift_Data($work_Shift_Data))) {
            throw new \InvalidArgumentException($work_Shift_DataArrayErrorMessage, __LINE__);
        }
        $this->Work_Shift_Data = $work_Shift_Data;
        return $this;
    }
    /**
     * Add item to Work_Shift_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Shift_DataType $item
     * @return \StructType\Work_ShiftType
     */
    public function addToWork_Shift_Data(\StructType\Work_Shift_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Shift_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Shift_Data property can only contain items of type \StructType\Work_Shift_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Shift_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_ShiftType
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
