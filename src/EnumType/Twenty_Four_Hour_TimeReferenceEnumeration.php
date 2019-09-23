<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Twenty_Four_Hour_TimeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Twenty_Four_Hour_TimeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Twenty_Four_Hour_Time_ID'
     * @return string 'Twenty_Four_Hour_Time_ID'
     */
    const VALUE_TWENTY_FOUR_HOUR_TIME_ID = 'Twenty_Four_Hour_Time_ID';
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
     * @uses self::VALUE_TWENTY_FOUR_HOUR_TIME_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_TWENTY_FOUR_HOUR_TIME_ID,
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
