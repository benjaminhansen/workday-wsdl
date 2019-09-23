<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Schedule_Request_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Schedule_Request_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Schedule_Request_Type_ID'
     * @return string 'Schedule_Request_Type_ID'
     */
    const VALUE_SCHEDULE_REQUEST_TYPE_ID = 'Schedule_Request_Type_ID';
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
     * @uses self::VALUE_SCHEDULE_REQUEST_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SCHEDULE_REQUEST_TYPE_ID,
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
