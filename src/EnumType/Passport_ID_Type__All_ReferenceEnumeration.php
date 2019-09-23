<?php

namespace EnumType;

/**
 * This class stands for Passport_ID_Type__All_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Passport_ID_Type__All_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'I9_Passport_Identifier_Type_Code'
     * @return string 'I9_Passport_Identifier_Type_Code'
     */
    const VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE = 'I9_Passport_Identifier_Type_Code';
    /**
     * Constant for value 'Passport_ID_Type_ID'
     * @return string 'Passport_ID_Type_ID'
     */
    const VALUE_PASSPORT_ID_TYPE_ID = 'Passport_ID_Type_ID';
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
     * @uses self::VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE
     * @uses self::VALUE_PASSPORT_ID_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE,
            self::VALUE_PASSPORT_ID_TYPE_ID,
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
