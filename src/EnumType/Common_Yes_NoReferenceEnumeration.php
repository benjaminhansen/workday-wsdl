<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Common_Yes_NoReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Common_Yes_NoReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Yes_No_Type_ID'
     * @return string 'Yes_No_Type_ID'
     */
    const VALUE_YES_NO_TYPE_ID = 'Yes_No_Type_ID';
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
     * @uses self::VALUE_YES_NO_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_YES_NO_TYPE_ID,
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
