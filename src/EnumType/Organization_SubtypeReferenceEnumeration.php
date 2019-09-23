<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Organization_SubtypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Organization_SubtypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Organization_Subtype_ID'
     * @return string 'Organization_Subtype_ID'
     */
    const VALUE_ORGANIZATION_SUBTYPE_ID = 'Organization_Subtype_ID';
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
     * @uses self::VALUE_ORGANIZATION_SUBTYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ORGANIZATION_SUBTYPE_ID,
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
