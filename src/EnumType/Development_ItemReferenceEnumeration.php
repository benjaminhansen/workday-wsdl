<?php

namespace EnumType;

/**
 * This class stands for Development_ItemReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Development_ItemReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Development_Item_ID'
     * @return string 'Development_Item_ID'
     */
    const VALUE_DEVELOPMENT_ITEM_ID = 'Development_Item_ID';
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
     * @uses self::VALUE_DEVELOPMENT_ITEM_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DEVELOPMENT_ITEM_ID,
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
