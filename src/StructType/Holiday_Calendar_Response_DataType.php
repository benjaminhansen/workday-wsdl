<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Holiday_Calendar_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieved Holiday Calendars.
 * @subpackage Structs
 */
class Holiday_Calendar_Response_DataType extends AbstractStructBase
{
    /**
     * The Holiday_Calendar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Holiday_CalendarType[]
     */
    public $Holiday_Calendar;
    /**
     * Constructor method for Holiday_Calendar_Response_DataType
     * @uses Holiday_Calendar_Response_DataType::setHoliday_Calendar()
     * @param \StructType\Holiday_CalendarType[] $holiday_Calendar
     */
    public function __construct(array $holiday_Calendar = array())
    {
        $this
            ->setHoliday_Calendar($holiday_Calendar);
    }
    /**
     * Get Holiday_Calendar value
     * @return \StructType\Holiday_CalendarType[]|null
     */
    public function getHoliday_Calendar()
    {
        return $this->Holiday_Calendar;
    }
    /**
     * This method is responsible for validating the values passed to the setHoliday_Calendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHoliday_Calendar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHoliday_CalendarForArrayConstraintsFromSetHoliday_Calendar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $holiday_Calendar_Response_DataTypeHoliday_CalendarItem) {
            // validation for constraint: itemType
            if (!$holiday_Calendar_Response_DataTypeHoliday_CalendarItem instanceof \StructType\Holiday_CalendarType) {
                $invalidValues[] = is_object($holiday_Calendar_Response_DataTypeHoliday_CalendarItem) ? get_class($holiday_Calendar_Response_DataTypeHoliday_CalendarItem) : sprintf('%s(%s)', gettype($holiday_Calendar_Response_DataTypeHoliday_CalendarItem), var_export($holiday_Calendar_Response_DataTypeHoliday_CalendarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Holiday_Calendar property can only contain items of type \StructType\Holiday_CalendarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Holiday_Calendar value
     * @throws \InvalidArgumentException
     * @param \StructType\Holiday_CalendarType[] $holiday_Calendar
     * @return \StructType\Holiday_Calendar_Response_DataType
     */
    public function setHoliday_Calendar(array $holiday_Calendar = array())
    {
        // validation for constraint: array
        if ('' !== ($holiday_CalendarArrayErrorMessage = self::validateHoliday_CalendarForArrayConstraintsFromSetHoliday_Calendar($holiday_Calendar))) {
            throw new \InvalidArgumentException($holiday_CalendarArrayErrorMessage, __LINE__);
        }
        $this->Holiday_Calendar = $holiday_Calendar;
        return $this;
    }
    /**
     * Add item to Holiday_Calendar value
     * @throws \InvalidArgumentException
     * @param \StructType\Holiday_CalendarType $item
     * @return \StructType\Holiday_Calendar_Response_DataType
     */
    public function addToHoliday_Calendar(\StructType\Holiday_CalendarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Holiday_CalendarType) {
            throw new \InvalidArgumentException(sprintf('The Holiday_Calendar property can only contain items of type \StructType\Holiday_CalendarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Holiday_Calendar[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Holiday_Calendar_Response_DataType
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
