<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieved Work Schedule Calendar.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Response_DataType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar and data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Work_Schedule_CalendarType[]
     */
    public $Work_Schedule_Calendar;
    /**
     * Constructor method for Work_Schedule_Calendar_Response_DataType
     * @uses Work_Schedule_Calendar_Response_DataType::setWork_Schedule_Calendar()
     * @param \StructType\Work_Schedule_CalendarType[] $work_Schedule_Calendar
     */
    public function __construct(array $work_Schedule_Calendar = array())
    {
        $this
            ->setWork_Schedule_Calendar($work_Schedule_Calendar);
    }
    /**
     * Get Work_Schedule_Calendar value
     * @return \StructType\Work_Schedule_CalendarType[]|null
     */
    public function getWork_Schedule_Calendar()
    {
        return $this->Work_Schedule_Calendar;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_CalendarForArrayConstraintsFromSetWork_Schedule_Calendar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem instanceof \StructType\Work_Schedule_CalendarType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem) ? get_class($work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem), var_export($work_Schedule_Calendar_Response_DataTypeWork_Schedule_CalendarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar property can only contain items of type \StructType\Work_Schedule_CalendarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_CalendarType[] $work_Schedule_Calendar
     * @return \StructType\Work_Schedule_Calendar_Response_DataType
     */
    public function setWork_Schedule_Calendar(array $work_Schedule_Calendar = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_CalendarArrayErrorMessage = self::validateWork_Schedule_CalendarForArrayConstraintsFromSetWork_Schedule_Calendar($work_Schedule_Calendar))) {
            throw new \InvalidArgumentException($work_Schedule_CalendarArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar = $work_Schedule_Calendar;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar value
     * @throws \InvalidArgumentException
     * @param \StructType\Work_Schedule_CalendarType $item
     * @return \StructType\Work_Schedule_Calendar_Response_DataType
     */
    public function addToWork_Schedule_Calendar(\StructType\Work_Schedule_CalendarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Work_Schedule_CalendarType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar property can only contain items of type \StructType\Work_Schedule_CalendarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Work_Schedule_Calendar_Response_DataType
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
