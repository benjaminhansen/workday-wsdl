<?php

namespace EnumType;

/**
 * This class stands for Skill_Item_CategoryReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Skill_Item_CategoryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Skill_Item_Category_ID'
     * @return string 'Skill_Item_Category_ID'
     */
    const VALUE_SKILL_ITEM_CATEGORY_ID = 'Skill_Item_Category_ID';
    /**
     * Constant for value 'Skill_Item_Category_Name'
     * @return string 'Skill_Item_Category_Name'
     */
    const VALUE_SKILL_ITEM_CATEGORY_NAME = 'Skill_Item_Category_Name';
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
     * @uses self::VALUE_SKILL_ITEM_CATEGORY_ID
     * @uses self::VALUE_SKILL_ITEM_CATEGORY_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SKILL_ITEM_CATEGORY_ID,
            self::VALUE_SKILL_ITEM_CATEGORY_NAME,
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
