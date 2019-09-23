<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Injury_Illness_Body_PartReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Injury_Illness_Body_PartReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Injury_Illness_Body_Part_ID'
     * @return string 'Injury_Illness_Body_Part_ID'
     */
    const VALUE_INJURY_ILLNESS_BODY_PART_ID = 'Injury_Illness_Body_Part_ID';
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
     * @uses self::VALUE_INJURY_ILLNESS_BODY_PART_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INJURY_ILLNESS_BODY_PART_ID,
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
