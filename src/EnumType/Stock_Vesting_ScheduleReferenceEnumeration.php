<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Stock_Vesting_ScheduleReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Stock_Vesting_ScheduleReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Stock_Vesting_Schedule_ID'
     * @return string 'Stock_Vesting_Schedule_ID'
     */
    const VALUE_STOCK_VESTING_SCHEDULE_ID = 'Stock_Vesting_Schedule_ID';
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
     * @uses self::VALUE_STOCK_VESTING_SCHEDULE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_STOCK_VESTING_SCHEDULE_ID,
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
