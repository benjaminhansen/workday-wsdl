<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Service_CenterReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Service_CenterReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Service_Center_ID'
     * @return string 'Service_Center_ID'
     */
    const VALUE_SERVICE_CENTER_ID = 'Service_Center_ID';
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
     * @uses self::VALUE_SERVICE_CENTER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SERVICE_CENTER_ID,
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
