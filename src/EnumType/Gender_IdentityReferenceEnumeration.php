<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Gender_IdentityReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Gender_IdentityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Gender_Identity_ID'
     * @return string 'Gender_Identity_ID'
     */
    const VALUE_GENDER_IDENTITY_ID = 'Gender_Identity_ID';
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
     * @uses self::VALUE_GENDER_IDENTITY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_GENDER_IDENTITY_ID,
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
