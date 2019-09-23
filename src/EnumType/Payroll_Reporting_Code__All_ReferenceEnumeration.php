<?php

namespace EnumType;

/**
 * This class stands for Payroll_Reporting_Code__All_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Payroll_Reporting_Code__All_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Payroll_Reporting_Code'
     * @return string 'Payroll_Reporting_Code'
     */
    const VALUE_PAYROLL_REPORTING_CODE = 'Payroll_Reporting_Code';
    /**
     * Constant for value 'Workday_Payroll_Reporting_Code'
     * @return string 'Workday_Payroll_Reporting_Code'
     */
    const VALUE_WORKDAY_PAYROLL_REPORTING_CODE = 'Workday_Payroll_Reporting_Code';
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
     * @uses self::VALUE_PAYROLL_REPORTING_CODE
     * @uses self::VALUE_WORKDAY_PAYROLL_REPORTING_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PAYROLL_REPORTING_CODE,
            self::VALUE_WORKDAY_PAYROLL_REPORTING_CODE,
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
