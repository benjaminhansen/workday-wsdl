<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Language_ProficiencyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Language_ProficiencyReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Language_Proficiency_ID'
     * @return string 'Language_Proficiency_ID'
     */
    const VALUE_LANGUAGE_PROFICIENCY_ID = 'Language_Proficiency_ID';
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
     * @uses self::VALUE_LANGUAGE_PROFICIENCY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LANGUAGE_PROFICIENCY_ID,
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
