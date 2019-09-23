<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Day_of_the_MonthReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Day_of_the_MonthReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Day_of_the_Month_ID'
     * @return string 'Day_of_the_Month_ID'
     */
    const VALUE_DAY_OF_THE_MONTH_ID = 'Day_of_the_Month_ID';
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
     * @uses self::VALUE_DAY_OF_THE_MONTH_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DAY_OF_THE_MONTH_ID,
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
