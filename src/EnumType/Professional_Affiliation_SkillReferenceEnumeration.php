<?php

namespace EnumType;

/**
 * This class stands for Professional_Affiliation_SkillReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Professional_Affiliation_SkillReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Professional_Affiliation_Skill_ID'
     * @return string 'Professional_Affiliation_Skill_ID'
     */
    const VALUE_PROFESSIONAL_AFFILIATION_SKILL_ID = 'Professional_Affiliation_Skill_ID';
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
     * @uses self::VALUE_PROFESSIONAL_AFFILIATION_SKILL_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PROFESSIONAL_AFFILIATION_SKILL_ID,
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
