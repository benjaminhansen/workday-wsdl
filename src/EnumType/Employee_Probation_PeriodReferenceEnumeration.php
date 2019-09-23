<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Employee_Probation_PeriodReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Employee_Probation_PeriodReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Probation_Period_ID'
     * @return string 'Probation_Period_ID'
     */
    const VALUE_PROBATION_PERIOD_ID = 'Probation_Period_ID';
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
     * @uses self::VALUE_PROBATION_PERIOD_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PROBATION_PERIOD_ID,
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
