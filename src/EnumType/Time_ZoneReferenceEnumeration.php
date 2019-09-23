<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Time_ZoneReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Time_ZoneReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Time_Zone_ID'
     * @return string 'Time_Zone_ID'
     */
    const VALUE_TIME_ZONE_ID = 'Time_Zone_ID';
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
     * @uses self::VALUE_TIME_ZONE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_TIME_ZONE_ID,
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
