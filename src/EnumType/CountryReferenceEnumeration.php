<?php

namespace EnumType;

/**
 * This class stands for CountryReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class CountryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'ISO_3166-1_Alpha-2_Code'
     * @return string 'ISO_3166-1_Alpha-2_Code'
     */
    const VALUE_ISO_3166_1_ALPHA_2_CODE = 'ISO_3166-1_Alpha-2_Code';
    /**
     * Constant for value 'ISO_3166-1_Alpha-3_Code'
     * @return string 'ISO_3166-1_Alpha-3_Code'
     */
    const VALUE_ISO_3166_1_ALPHA_3_CODE = 'ISO_3166-1_Alpha-3_Code';
    /**
     * Constant for value 'ISO_3166-1_Numeric-3_Code'
     * @return string 'ISO_3166-1_Numeric-3_Code'
     */
    const VALUE_ISO_3166_1_NUMERIC_3_CODE = 'ISO_3166-1_Numeric-3_Code';
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
     * @uses self::VALUE_ISO_3166_1_ALPHA_2_CODE
     * @uses self::VALUE_ISO_3166_1_ALPHA_3_CODE
     * @uses self::VALUE_ISO_3166_1_NUMERIC_3_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ISO_3166_1_ALPHA_2_CODE,
            self::VALUE_ISO_3166_1_ALPHA_3_CODE,
            self::VALUE_ISO_3166_1_NUMERIC_3_CODE,
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
