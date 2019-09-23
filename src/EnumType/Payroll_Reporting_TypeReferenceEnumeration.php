<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Payroll_Reporting_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Payroll_Reporting_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Payroll_Reporting_Type_Code'
     * @return string 'Payroll_Reporting_Type_Code'
     */
    const VALUE_PAYROLL_REPORTING_TYPE_CODE = 'Payroll_Reporting_Type_Code';
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
     * @uses self::VALUE_PAYROLL_REPORTING_TYPE_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PAYROLL_REPORTING_TYPE_CODE,
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
