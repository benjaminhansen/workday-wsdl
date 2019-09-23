<?php

namespace EnumType;

/**
 * This class stands for Succession_ReadinessReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Succession_ReadinessReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Succession_Readiness_Code'
     * @return string 'Succession_Readiness_Code'
     */
    const VALUE_SUCCESSION_READINESS_CODE = 'Succession_Readiness_Code';
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
     * @uses self::VALUE_SUCCESSION_READINESS_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SUCCESSION_READINESS_CODE,
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
