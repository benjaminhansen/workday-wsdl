<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for One-Time_Payment_PlanReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class One_Time_Payment_PlanReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'One-Time_Payment_Plan_ID'
     * @return string 'One-Time_Payment_Plan_ID'
     */
    const VALUE_ONE_TIME_PAYMENT_PLAN_ID = 'One-Time_Payment_Plan_ID';
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
     * @uses self::VALUE_ONE_TIME_PAYMENT_PLAN_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ONE_TIME_PAYMENT_PLAN_ID,
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
