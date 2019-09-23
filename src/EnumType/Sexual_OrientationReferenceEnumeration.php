<?php

namespace EnumType;

/**
 * This class stands for Sexual_OrientationReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Sexual_OrientationReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Sexual_Orientation_ID'
     * @return string 'Sexual_Orientation_ID'
     */
    const VALUE_SEXUAL_ORIENTATION_ID = 'Sexual_Orientation_ID';
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
     * @uses self::VALUE_SEXUAL_ORIENTATION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SEXUAL_ORIENTATION_ID,
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
