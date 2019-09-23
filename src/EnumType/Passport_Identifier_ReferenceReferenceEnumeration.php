<?php

namespace EnumType;

/**
 * This class stands for Passport_Identifier_ReferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Passport_Identifier_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Passport_Identifier_Reference_ID'
     * @return string 'Passport_Identifier_Reference_ID'
     */
    const VALUE_PASSPORT_IDENTIFIER_REFERENCE_ID = 'Passport_Identifier_Reference_ID';
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
     * @uses self::VALUE_PASSPORT_IDENTIFIER_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PASSPORT_IDENTIFIER_REFERENCE_ID,
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
