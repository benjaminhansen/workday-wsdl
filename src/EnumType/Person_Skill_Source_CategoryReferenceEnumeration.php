<?php

namespace EnumType;

/**
 * This class stands for Person_Skill_Source_CategoryReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Person_Skill_Source_CategoryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Skill_Source_Category_ID'
     * @return string 'Skill_Source_Category_ID'
     */
    const VALUE_SKILL_SOURCE_CATEGORY_ID = 'Skill_Source_Category_ID';
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
     * @uses self::VALUE_SKILL_SOURCE_CATEGORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SKILL_SOURCE_CATEGORY_ID,
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
