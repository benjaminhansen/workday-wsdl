<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Citizenship_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Citizenship_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Citizenship_Status_Code'
     * @return string 'Citizenship_Status_Code'
     */
    const VALUE_CITIZENSHIP_STATUS_CODE = 'Citizenship_Status_Code';
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
     * @uses self::VALUE_CITIZENSHIP_STATUS_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CITIZENSHIP_STATUS_CODE,
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
