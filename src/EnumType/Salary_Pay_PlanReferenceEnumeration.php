<?php

namespace EnumType;

/**
 * This class stands for Salary_Pay_PlanReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Salary_Pay_PlanReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Compensation_Plan_ID'
     * @return string 'Compensation_Plan_ID'
     */
    const VALUE_COMPENSATION_PLAN_ID = 'Compensation_Plan_ID';
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
     * @uses self::VALUE_COMPENSATION_PLAN_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPENSATION_PLAN_ID,
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
