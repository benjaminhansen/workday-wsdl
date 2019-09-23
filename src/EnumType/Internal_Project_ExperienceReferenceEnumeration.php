<?php

namespace EnumType;

/**
 * This class stands for Internal_Project_ExperienceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Internal_Project_ExperienceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Internal_Project_Experience_ID'
     * @return string 'Internal_Project_Experience_ID'
     */
    const VALUE_INTERNAL_PROJECT_EXPERIENCE_ID = 'Internal_Project_Experience_ID';
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
     * @uses self::VALUE_INTERNAL_PROJECT_EXPERIENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INTERNAL_PROJECT_EXPERIENCE_ID,
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
