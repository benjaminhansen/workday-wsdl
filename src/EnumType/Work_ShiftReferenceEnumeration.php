<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Work_ShiftReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Work_ShiftReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Work_Shift_ID'
     * @return string 'Work_Shift_ID'
     */
    const VALUE_WORK_SHIFT_ID = 'Work_Shift_ID';
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
     * @uses self::VALUE_WORK_SHIFT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_WORK_SHIFT_ID,
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
