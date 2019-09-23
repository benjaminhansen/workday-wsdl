<?php

namespace EnumType;

/**
 * This class stands for Date_And_Time_UnitReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Date_And_Time_UnitReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Date_And_Time_Unit_ID'
     * @return string 'Date_And_Time_Unit_ID'
     */
    const VALUE_DATE_AND_TIME_UNIT_ID = 'Date_And_Time_Unit_ID';
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
     * @uses self::VALUE_DATE_AND_TIME_UNIT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DATE_AND_TIME_UNIT_ID,
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
