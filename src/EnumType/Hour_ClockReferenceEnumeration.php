<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Hour_ClockReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Hour_ClockReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Hour_Clock_ID'
     * @return string 'Hour_Clock_ID'
     */
    const VALUE_HOUR_CLOCK_ID = 'Hour_Clock_ID';
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
     * @uses self::VALUE_HOUR_CLOCK_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_HOUR_CLOCK_ID,
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
