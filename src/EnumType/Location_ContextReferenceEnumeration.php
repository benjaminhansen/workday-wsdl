<?php

namespace EnumType;

/**
 * This class stands for Location_ContextReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Location_ContextReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Country_Region_ID'
     * @return string 'Country_Region_ID'
     */
    const VALUE_COUNTRY_REGION_ID = 'Country_Region_ID';
    /**
     * Constant for value 'Country_Subregion_Code_In_Country'
     * @return string 'Country_Subregion_Code_In_Country'
     */
    const VALUE_COUNTRY_SUBREGION_CODE_IN_COUNTRY = 'Country_Subregion_Code_In_Country';
    /**
     * Constant for value 'Country_Subregion_Internal_ID'
     * @return string 'Country_Subregion_Internal_ID'
     */
    const VALUE_COUNTRY_SUBREGION_INTERNAL_ID = 'Country_Subregion_Internal_ID';
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
     * Constant for value 'ISO_3166-2_Code'
     * @return string 'ISO_3166-2_Code'
     */
    const VALUE_ISO_3166_2_CODE = 'ISO_3166-2_Code';
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
     * @uses self::VALUE_COUNTRY_REGION_ID
     * @uses self::VALUE_COUNTRY_SUBREGION_CODE_IN_COUNTRY
     * @uses self::VALUE_COUNTRY_SUBREGION_INTERNAL_ID
     * @uses self::VALUE_ISO_3166_1_ALPHA_2_CODE
     * @uses self::VALUE_ISO_3166_1_ALPHA_3_CODE
     * @uses self::VALUE_ISO_3166_1_NUMERIC_3_CODE
     * @uses self::VALUE_ISO_3166_2_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COUNTRY_REGION_ID,
            self::VALUE_COUNTRY_SUBREGION_CODE_IN_COUNTRY,
            self::VALUE_COUNTRY_SUBREGION_INTERNAL_ID,
            self::VALUE_ISO_3166_1_ALPHA_2_CODE,
            self::VALUE_ISO_3166_1_ALPHA_3_CODE,
            self::VALUE_ISO_3166_1_NUMERIC_3_CODE,
            self::VALUE_ISO_3166_2_CODE,
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
