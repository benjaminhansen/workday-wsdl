<?php

namespace EnumType;

/**
 * This class stands for Leave_Type_ReasonReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Leave_Type_ReasonReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Leave_Reason_ID'
     * @return string 'Leave_Reason_ID'
     */
    const VALUE_LEAVE_REASON_ID = 'Leave_Reason_ID';
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
     * @uses self::VALUE_LEAVE_REASON_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LEAVE_REASON_ID,
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
