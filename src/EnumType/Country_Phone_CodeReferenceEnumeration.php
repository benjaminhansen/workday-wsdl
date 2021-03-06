<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Country_Phone_CodeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Country_Phone_CodeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Country_Phone_Code_ID'
     * @return string 'Country_Phone_Code_ID'
     */
    const VALUE_COUNTRY_PHONE_CODE_ID = 'Country_Phone_Code_ID';
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
     * @uses self::VALUE_COUNTRY_PHONE_CODE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COUNTRY_PHONE_CODE_ID,
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
