<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Government_ID_Type__All_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Government_ID_Type__All_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Government_ID_Type_ID'
     * @return string 'Government_ID_Type_ID'
     */
    const VALUE_GOVERNMENT_ID_TYPE_ID = 'Government_ID_Type_ID';
    /**
     * Constant for value 'I9_Government_Identifier_Type_Code'
     * @return string 'I9_Government_Identifier_Type_Code'
     */
    const VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE = 'I9_Government_Identifier_Type_Code';
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
     * @uses self::VALUE_GOVERNMENT_ID_TYPE_ID
     * @uses self::VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_GOVERNMENT_ID_TYPE_ID,
            self::VALUE_I_9_GOVERNMENT_IDENTIFIER_TYPE_CODE,
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
