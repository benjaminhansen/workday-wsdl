<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for External_URLReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_URLReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'URL'
     * @return string 'URL'
     */
    const VALUE_URL = 'URL';
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
     * @uses self::VALUE_URL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_URL,
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
