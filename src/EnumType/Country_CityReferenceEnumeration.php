<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Country_CityReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Country_CityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
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
     * @uses self::VALUE_COUNTRY_SUBREGION_CODE_IN_COUNTRY
     * @uses self::VALUE_COUNTRY_SUBREGION_INTERNAL_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COUNTRY_SUBREGION_CODE_IN_COUNTRY,
            self::VALUE_COUNTRY_SUBREGION_INTERNAL_ID,
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
