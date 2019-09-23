<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Marital_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Marital_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Marital_Status_Code'
     * @return string 'Marital_Status_Code'
     */
    const VALUE_MARITAL_STATUS_CODE = 'Marital_Status_Code';
    /**
     * Constant for value 'Marital_Status_ID'
     * @return string 'Marital_Status_ID'
     */
    const VALUE_MARITAL_STATUS_ID = 'Marital_Status_ID';
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
     * @uses self::VALUE_MARITAL_STATUS_CODE
     * @uses self::VALUE_MARITAL_STATUS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_MARITAL_STATUS_CODE,
            self::VALUE_MARITAL_STATUS_ID,
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
