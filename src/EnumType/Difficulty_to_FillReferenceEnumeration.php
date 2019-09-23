<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Difficulty_to_FillReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Difficulty_to_FillReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Difficulty_to_Fill_Code'
     * @return string 'Difficulty_to_Fill_Code'
     */
    const VALUE_DIFFICULTY_TO_FILL_CODE = 'Difficulty_to_Fill_Code';
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
     * @uses self::VALUE_DIFFICULTY_TO_FILL_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DIFFICULTY_TO_FILL_CODE,
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
