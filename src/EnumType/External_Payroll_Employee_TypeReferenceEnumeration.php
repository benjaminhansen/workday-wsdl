<?php

namespace EnumType;

/**
 * This class stands for External_Payroll_Employee_TypeReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class External_Payroll_Employee_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'EmployeeType'
     * @return string 'EmployeeType'
     */
    const VALUE_EMPLOYEE_TYPE = 'EmployeeType';
    /**
     * Constant for value 'External_Payroll_Employee_Type_ID'
     * @return string 'External_Payroll_Employee_Type_ID'
     */
    const VALUE_EXTERNAL_PAYROLL_EMPLOYEE_TYPE_ID = 'External_Payroll_Employee_Type_ID';
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
     * @uses self::VALUE_EMPLOYEE_TYPE
     * @uses self::VALUE_EXTERNAL_PAYROLL_EMPLOYEE_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EMPLOYEE_TYPE,
            self::VALUE_EXTERNAL_PAYROLL_EMPLOYEE_TYPE_ID,
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
