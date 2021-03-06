<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Achievable_LevelReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Achievable_LevelReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Achievable_Level_Code'
     * @return string 'Achievable_Level_Code'
     */
    const VALUE_ACHIEVABLE_LEVEL_CODE = 'Achievable_Level_Code';
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
     * @uses self::VALUE_ACHIEVABLE_LEVEL_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACHIEVABLE_LEVEL_CODE,
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
