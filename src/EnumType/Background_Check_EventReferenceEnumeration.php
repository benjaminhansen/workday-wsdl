<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Background_Check_EventReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Background_Check_EventReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Background_Check_ID'
     * @return string 'Background_Check_ID'
     */
    const VALUE_BACKGROUND_CHECK_ID = 'Background_Check_ID';
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
     * @uses self::VALUE_BACKGROUND_CHECK_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BACKGROUND_CHECK_ID,
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
