<?php

namespace EnumType;

/**
 * This class stands for Leave_Request_EventReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Leave_Request_EventReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Request_Leave_of_Absence_ID'
     * @return string 'Request_Leave_of_Absence_ID'
     */
    const VALUE_REQUEST_LEAVE_OF_ABSENCE_ID = 'Request_Leave_of_Absence_ID';
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
     * @uses self::VALUE_REQUEST_LEAVE_OF_ABSENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_REQUEST_LEAVE_OF_ABSENCE_ID,
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
