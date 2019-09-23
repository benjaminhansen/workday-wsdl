<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Work_Hours_ProfileReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Work_Hours_ProfileReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Work_Hours_Profile_ID'
     * @return string 'Work_Hours_Profile_ID'
     */
    const VALUE_WORK_HOURS_PROFILE_ID = 'Work_Hours_Profile_ID';
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
     * @uses self::VALUE_WORK_HOURS_PROFILE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_WORK_HOURS_PROFILE_ID,
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
