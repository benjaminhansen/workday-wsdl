<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Insurance_Coverage_TargetReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Insurance_Coverage_TargetReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Insurance_Coverage_Target_ID'
     * @return string 'Insurance_Coverage_Target_ID'
     */
    const VALUE_INSURANCE_COVERAGE_TARGET_ID = 'Insurance_Coverage_Target_ID';
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
     * @uses self::VALUE_INSURANCE_COVERAGE_TARGET_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INSURANCE_COVERAGE_TARGET_ID,
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
