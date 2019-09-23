<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Pay_ComponentReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Pay_ComponentReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Deduction_Code'
     * @return string 'Deduction_Code'
     */
    const VALUE_DEDUCTION_CODE = 'Deduction_Code';
    /**
     * Constant for value 'Earning_Code'
     * @return string 'Earning_Code'
     */
    const VALUE_EARNING_CODE = 'Earning_Code';
    /**
     * Constant for value 'Workday_Deduction_Code'
     * @return string 'Workday_Deduction_Code'
     */
    const VALUE_WORKDAY_DEDUCTION_CODE = 'Workday_Deduction_Code';
    /**
     * Constant for value 'Workday_Earning_Code'
     * @return string 'Workday_Earning_Code'
     */
    const VALUE_WORKDAY_EARNING_CODE = 'Workday_Earning_Code';
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
     * @uses self::VALUE_DEDUCTION_CODE
     * @uses self::VALUE_EARNING_CODE
     * @uses self::VALUE_WORKDAY_DEDUCTION_CODE
     * @uses self::VALUE_WORKDAY_EARNING_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DEDUCTION_CODE,
            self::VALUE_EARNING_CODE,
            self::VALUE_WORKDAY_DEDUCTION_CODE,
            self::VALUE_WORKDAY_EARNING_CODE,
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
