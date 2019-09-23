<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Travel_AmountReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Travel_AmountReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Travel_Amount_ID'
     * @return string 'Travel_Amount_ID'
     */
    const VALUE_TRAVEL_AMOUNT_ID = 'Travel_Amount_ID';
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
     * @uses self::VALUE_TRAVEL_AMOUNT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_TRAVEL_AMOUNT_ID,
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
