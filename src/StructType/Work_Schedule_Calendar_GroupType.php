<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Requested Work Schedule Calendar Group data.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_GroupType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar Group.
     * - minOccurs: 0
     * @var \StructType\Work_Schedule_Calendar_GroupObjectType
     */
    public $Work_Schedule_Calendar_Group_Reference;
    /**
     * The Work_Schedule_Calendar_Group_Data
     * Meta information extracted from the WSDL
     * - documentation: Instance data for Work Schedule Calendar Group.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Schedule_Calendar_Group_DataType[]
     */
    public $Work_Schedule_Calendar_Group_Data;
    /**
     * Constructor method for Work_Schedule_Calendar_GroupType
     * @uses Work_Schedule_Calendar_GroupType::setWork_Schedule_Calendar_Group_Reference()
     * @uses Work_Schedule_Calendar_GroupType::setWork_Schedule_Calendar_Group_Data()
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference
     * @param \StructType\Work_Schedule_Calendar_Group_DataType[] $work_Schedule_Calendar_Group_Data
     */
    public function __construct(\StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference = null, array $work_Schedule_Calendar_Group_Data = array())
    {
        $this
            ->setWork_Schedule_Calendar_Group_Reference($work_Schedule_Calendar_Group_Reference)
            ->setWork_Schedule_Calendar_Group_Data($work_Schedule_Calendar_Group_Data);
    }
    /**
     * Get Work_Schedule_Calendar_Group_Reference value
     * @return \StructType\Work_Schedule_Calendar_GroupObjectType|null
     */
    public function getWork_Schedule_Calendar_Group_Reference()
    {
        return $this->Work_Schedule_Calendar_Group_Reference;
    }
    /**
     * Set Work_Schedule_Calendar_Group_Reference value
     * @param \StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference
     * @return \StructType\Work_Schedule_Calendar_GroupType
     */
    public function setWork_Schedule_Calendar_Group_Reference(\StructType\Work_Schedule_Calendar_GroupObjectType $work_Schedule_Calendar_Group_Reference = null)
    {
        $this->Work_Schedule_Calendar_Group_Reference = $work_Schedule_Calendar_Group_Reference;
        return $this;
    }
    /**
     * Get Work_Schedule_Calendar_Group_Data value
     * @return \StructType\Work_Schedule_Calendar_Group_DataType[]|null
     */
    public function getWork_Schedule_Calendar_Group_Data()
    {
        return $this->Work_Schedule_Calendar_Group_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Group_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Group_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_Group_DataForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem instanceof \StructType\Work_Schedule_Calendar_Group_DataType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem) ? get_class($work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem), var_export($work_Schedule_Calendar_GroupTypeWork_Schedule_Calendar_Group_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Group_Data property can only contain items of type \StructType\Work_Schedule_Calendar_Group_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Group_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_Group_DataType[] $work_Schedule_Calendar_Group_Data
     * @return \StructType\Work_Schedule_Calendar_GroupType
     */
    public function setWork_Schedule_Calendar_Group_Data(array $work_Schedule_Calendar_Group_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_Group_DataArrayErrorMessage = self::validateWork_Schedule_Calendar_Group_DataForArrayConstraintsFromSetWork_Schedule_Calendar_Group_Data($work_Schedule_Calendar_Group_Data))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_Group_DataArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Data = $work_Schedule_Calendar_Group_Data;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Group_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_Group_DataType $item
     * @return \StructType\Work_Schedule_Calendar_GroupType
     */
    public function addToWork_Schedule_Calendar_Group_Data(\StructType\Work_Schedule_Calendar_Group_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Schedule_Calendar_Group_DataType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Group_Data property can only contain items of type \StructType\Work_Schedule_Calendar_Group_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Group_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Schedule_Calendar_GroupType
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
