<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for
 * Form_I-9_Identifier_Type__Workday_Owned_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Form_I_9_Identifier_Type__Workday_Owned_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'I9_Government_Identifier_Type_Code'
     * @return string 'I9_Government_Identifier_Type_Code'
     */
    const VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE = 'I9_Government_Identifier_Type_Code';
    /**
     * Constant for value 'I9_License_Identifier_Type_Code'
     * @return string 'I9_License_Identifier_Type_Code'
     */
    const VALUE_I_9_LICENSE_IDENTIFIER_TYPE_CODE = 'I9_License_Identifier_Type_Code';
    /**
     * Constant for value 'I9_Passport_Identifier_Type_Code'
     * @return string 'I9_Passport_Identifier_Type_Code'
     */
    const VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE = 'I9_Passport_Identifier_Type_Code';
    /**
     * Constant for value 'National_ID_Type_Code'
     * @return string 'National_ID_Type_Code'
     */
    const VALUE_NATIONAL_ID_TYPE_CODE = 'National_ID_Type_Code';
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
     * @uses self::VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE
     * @uses self::VALUE_I_9_LICENSE_IDENTIFIER_TYPE_CODE
     * @uses self::VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE
     * @uses self::VALUE_NATIONAL_ID_TYPE_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE,
            self::VALUE_I_9_LICENSE_IDENTIFIER_TYPE_CODE,
            self::VALUE_I_9_PASSPORT_IDENTIFIER_TYPE_CODE,
            self::VALUE_NATIONAL_ID_TYPE_CODE,
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
