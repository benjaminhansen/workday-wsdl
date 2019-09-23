<?php

namespace EnumType;

/**
 * This class stands for Delivery_ModeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Delivery_ModeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Delivery_Mode_ID'
     * @return string 'Delivery_Mode_ID'
     */
    const VALUE_DELIVERY_MODE_ID = 'Delivery_Mode_ID';
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
     * @uses self::VALUE_DELIVERY_MODE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DELIVERY_MODE_ID,
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
