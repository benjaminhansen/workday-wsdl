<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Group_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieved Work Schedule Calendar Group.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Group_Response_DataType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Group
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar Group and data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Schedule_Calendar_GroupType[]
     */
    public $Work_Schedule_Calendar_Group;
    /**
     * Constructor method for Work_Schedule_Calendar_Group_Response_DataType
     * @uses Work_Schedule_Calendar_Group_Response_DataType::setWork_Schedule_Calendar_Group()
     * @param \StructType\Work_Schedule_Calendar_GroupType[] $work_Schedule_Calendar_Group
     */
    public function __construct(array $work_Schedule_Calendar_Group = array())
    {
        $this
            ->setWork_Schedule_Calendar_Group($work_Schedule_Calendar_Group);
    }
    /**
     * Get Work_Schedule_Calendar_Group value
     * @return \StructType\Work_Schedule_Calendar_GroupType[]|null
     */
    public function getWork_Schedule_Calendar_Group()
    {
        return $this->Work_Schedule_Calendar_Group;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Group method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Group method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_GroupForArrayConstraintsFromSetWork_Schedule_Calendar_Group(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem instanceof \StructType\Work_Schedule_Calendar_GroupType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem) ? get_class($work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem), var_export($work_Schedule_Calendar_Group_Response_DataTypeWork_Schedule_Calendar_GroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Group property can only contain items of type \StructType\Work_Schedule_Calendar_GroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_GroupType[] $work_Schedule_Calendar_Group
     * @return \StructType\Work_Schedule_Calendar_Group_Response_DataType
     */
    public function setWork_Schedule_Calendar_Group(array $work_Schedule_Calendar_Group = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_GroupArrayErrorMessage = self::validateWork_Schedule_Calendar_GroupForArrayConstraintsFromSetWork_Schedule_Calendar_Group($work_Schedule_Calendar_Group))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_GroupArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Group = $work_Schedule_Calendar_Group;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Group value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_Calendar_GroupType $item
     * @return \StructType\Work_Schedule_Calendar_Group_Response_DataType
     */
    public function addToWork_Schedule_Calendar_Group(\StructType\Work_Schedule_Calendar_GroupType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Schedule_Calendar_GroupType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Group property can only contain items of type \StructType\Work_Schedule_Calendar_GroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Group[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Schedule_Calendar_Group_Response_DataType
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
