<?php

namespace EnumType;

/**
 * This class stands for Academic_LevelReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Academic_LevelReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Academic_Level_ID'
     * @return string 'Academic_Level_ID'
     */
    const VALUE_ACADEMIC_LEVEL_ID = 'Academic_Level_ID';
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
     * @uses self::VALUE_ACADEMIC_LEVEL_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_LEVEL_ID,
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
