<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for SubscriberReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class SubscriberReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Integration_Service_Name'
     * @return string 'Integration_Service_Name'
     */
    const VALUE_INTEGRATION_SERVICE_NAME = 'Integration_Service_Name';
    /**
     * Constant for value 'Integration_System_ID'
     * @return string 'Integration_System_ID'
     */
    const VALUE_INTEGRATION_SYSTEM_ID = 'Integration_System_ID';
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
     * @uses self::VALUE_INTEGRATION_SERVICE_NAME
     * @uses self::VALUE_INTEGRATION_SYSTEM_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INTEGRATION_SERVICE_NAME,
            self::VALUE_INTEGRATION_SYSTEM_ID,
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
