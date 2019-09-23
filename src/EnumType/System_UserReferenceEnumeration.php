<?php

namespace EnumType;

/**
 * This class stands for System_UserReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class System_UserReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'System_User_ID'
     * @return string 'System_User_ID'
     */
    const VALUE_SYSTEM_USER_ID = 'System_User_ID';
    /**
     * Constant for value 'System_User_OpenID'
     * @return string 'System_User_OpenID'
     */
    const VALUE_SYSTEM_USER_OPEN_ID = 'System_User_OpenID';
    /**
     * Constant for value 'System_User_OpenID_Connect_Internal'
     * @return string 'System_User_OpenID_Connect_Internal'
     */
    const VALUE_SYSTEM_USER_OPEN_ID_CONNECT_INTERNAL = 'System_User_OpenID_Connect_Internal';
    /**
     * Constant for value 'System_User_OpenID_Internal'
     * @return string 'System_User_OpenID_Internal'
     */
    const VALUE_SYSTEM_USER_OPEN_ID_INTERNAL = 'System_User_OpenID_Internal';
    /**
     * Constant for value 'WorkdayUserName'
     * @return string 'WorkdayUserName'
     */
    const VALUE_WORKDAY_USER_NAME = 'WorkdayUserName';
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
     * @uses self::VALUE_SYSTEM_USER_ID
     * @uses self::VALUE_SYSTEM_USER_OPEN_ID
     * @uses self::VALUE_SYSTEM_USER_OPEN_ID_CONNECT_INTERNAL
     * @uses self::VALUE_SYSTEM_USER_OPEN_ID_INTERNAL
     * @uses self::VALUE_WORKDAY_USER_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SYSTEM_USER_ID,
            self::VALUE_SYSTEM_USER_OPEN_ID,
            self::VALUE_SYSTEM_USER_OPEN_ID_CONNECT_INTERNAL,
            self::VALUE_SYSTEM_USER_OPEN_ID_INTERNAL,
            self::VALUE_WORKDAY_USER_NAME,
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
