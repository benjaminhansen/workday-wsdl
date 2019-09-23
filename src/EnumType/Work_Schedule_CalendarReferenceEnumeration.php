<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Work_Schedule_CalendarReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Work_Schedule_CalendarReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Work_Schedule_Calendar_ID'
     * @return string 'Work_Schedule_Calendar_ID'
     */
    const VALUE_WORK_SCHEDULE_CALENDAR_ID = 'Work_Schedule_Calendar_ID';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_WID
     * @uses self::VALUE_WORK_SCHEDULE_CALENDAR_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_WORK_SCHEDULE_CALENDAR_ID,
        );
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
