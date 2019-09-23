<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Country_RegionReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Country_RegionReferenceEnumeration
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
     * @uses self::VALUE_ISO_3166_2_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COUNTRY_REGION_ID,
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
