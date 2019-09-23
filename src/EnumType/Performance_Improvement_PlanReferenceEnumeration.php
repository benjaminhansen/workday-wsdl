<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Performance_Improvement_PlanReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Performance_Improvement_PlanReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Employee_Review_ID'
     * @return string 'Employee_Review_ID'
     */
    const VALUE_EMPLOYEE_REVIEW_ID = 'Employee_Review_ID';
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
     * @uses self::VALUE_EMPLOYEE_REVIEW_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EMPLOYEE_REVIEW_ID,
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
