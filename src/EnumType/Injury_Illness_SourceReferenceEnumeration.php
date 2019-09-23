<?php

namespace EnumType;

/**
 * This class stands for Injury_Illness_SourceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Injury_Illness_SourceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Injury_Illness_Source_ID'
     * @return string 'Injury_Illness_Source_ID'
     */
    const VALUE_INJURY_ILLNESS_SOURCE_ID = 'Injury_Illness_Source_ID';
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
     * @uses self::VALUE_INJURY_ILLNESS_SOURCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INJURY_ILLNESS_SOURCE_ID,
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
