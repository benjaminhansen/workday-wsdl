<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Relative_Name_ReferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Relative_Name_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Relative_Name_ID'
     * @return string 'Relative_Name_ID'
     */
    const VALUE_RELATIVE_NAME_ID = 'Relative_Name_ID';
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
     * @uses self::VALUE_RELATIVE_NAME_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_RELATIVE_NAME_ID,
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
