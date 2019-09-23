<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Injury_Illness_SeverityReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Injury_Illness_SeverityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Injury_Illness_Severity_Code'
     * @return string 'Injury_Illness_Severity_Code'
     */
    const VALUE_INJURY_ILLNESS_SEVERITY_CODE = 'Injury_Illness_Severity_Code';
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
     * @uses self::VALUE_INJURY_ILLNESS_SEVERITY_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INJURY_ILLNESS_SEVERITY_CODE,
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
