<?php

namespace EnumType;

/**
 * This class stands for Day_Breaker_DividerReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Day_Breaker_DividerReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Day_Breaker_Divider_ID'
     * @return string 'Day_Breaker_Divider_ID'
     */
    const VALUE_DAY_BREAKER_DIVIDER_ID = 'Day_Breaker_Divider_ID';
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
     * @uses self::VALUE_DAY_BREAKER_DIVIDER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DAY_BREAKER_DIVIDER_ID,
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
