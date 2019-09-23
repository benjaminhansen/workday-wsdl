<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Location_AttributeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Location_AttributeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Location_Attribute_ID'
     * @return string 'Location_Attribute_ID'
     */
    const VALUE_LOCATION_ATTRIBUTE_ID = 'Location_Attribute_ID';
    /**
     * Constant for value 'Location_Attribute_Name_ID'
     * @return string 'Location_Attribute_Name_ID'
     */
    const VALUE_LOCATION_ATTRIBUTE_NAME_ID = 'Location_Attribute_Name_ID';
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
     * @uses self::VALUE_LOCATION_ATTRIBUTE_ID
     * @uses self::VALUE_LOCATION_ATTRIBUTE_NAME_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LOCATION_ATTRIBUTE_ID,
            self::VALUE_LOCATION_ATTRIBUTE_NAME_ID,
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
