<?php

namespace EnumType;

/**
 * This class stands for Calendar_YearReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Calendar_YearReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Calendar_Year_ID'
     * @return string 'Calendar_Year_ID'
     */
    const VALUE_CALENDAR_YEAR_ID = 'Calendar_Year_ID';
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
     * @uses self::VALUE_CALENDAR_YEAR_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CALENDAR_YEAR_ID,
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
