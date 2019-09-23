<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Web_Address_ReferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Web_Address_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Web_Address_ID'
     * @return string 'Web_Address_ID'
     */
    const VALUE_WEB_ADDRESS_ID = 'Web_Address_ID';
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
     * @uses self::VALUE_WEB_ADDRESS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_WEB_ADDRESS_ID,
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
