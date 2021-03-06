<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Development_Item_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Development_Item_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Development_Item_Status__Tenanted_'
     * @return string 'Development_Item_Status__Tenanted_'
     */
    const VALUE_DEVELOPMENT_ITEM_STATUS_TENANTED = 'Development_Item_Status__Tenanted_';
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
     * @uses self::VALUE_DEVELOPMENT_ITEM_STATUS_TENANTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DEVELOPMENT_ITEM_STATUS_TENANTED,
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
