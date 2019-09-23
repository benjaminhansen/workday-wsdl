<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for CurrencyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class CurrencyReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Currency_ID'
     * @return string 'Currency_ID'
     */
    const VALUE_CURRENCY_ID = 'Currency_ID';
    /**
     * Constant for value 'Currency_Numeric_Code'
     * @return string 'Currency_Numeric_Code'
     */
    const VALUE_CURRENCY_NUMERIC_CODE = 'Currency_Numeric_Code';
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
     * @uses self::VALUE_CURRENCY_ID
     * @uses self::VALUE_CURRENCY_NUMERIC_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CURRENCY_ID,
            self::VALUE_CURRENCY_NUMERIC_CODE,
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
