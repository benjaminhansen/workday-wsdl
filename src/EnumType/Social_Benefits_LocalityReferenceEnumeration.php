<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Social_Benefits_LocalityReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Social_Benefits_LocalityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Social_Benefits_Locality_ID'
     * @return string 'Social_Benefits_Locality_ID'
     */
    const VALUE_SOCIAL_BENEFITS_LOCALITY_ID = 'Social_Benefits_Locality_ID';
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
     * @uses self::VALUE_SOCIAL_BENEFITS_LOCALITY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SOCIAL_BENEFITS_LOCALITY_ID,
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
