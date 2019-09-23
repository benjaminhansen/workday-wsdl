<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Compensation_PeriodReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Compensation_PeriodReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Compensation_Period_ID'
     * @return string 'Compensation_Period_ID'
     */
    const VALUE_COMPENSATION_PERIOD_ID = 'Compensation_Period_ID';
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
     * @uses self::VALUE_COMPENSATION_PERIOD_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPENSATION_PERIOD_ID,
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
