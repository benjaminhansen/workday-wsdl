<?php

namespace EnumType;

/**
 * This class stands for Career_PreferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Career_PreferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Career_Preference_ID'
     * @return string 'Career_Preference_ID'
     */
    const VALUE_CAREER_PREFERENCE_ID = 'Career_Preference_ID';
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
     * @uses self::VALUE_CAREER_PREFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CAREER_PREFERENCE_ID,
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
