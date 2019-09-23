<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Position_Worker_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Position_Worker_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Contingent_Worker_Type_ID'
     * @return string 'Contingent_Worker_Type_ID'
     */
    const VALUE_CONTINGENT_WORKER_TYPE_ID = 'Contingent_Worker_Type_ID';
    /**
     * Constant for value 'Employee_Type_ID'
     * @return string 'Employee_Type_ID'
     */
    const VALUE_EMPLOYEE_TYPE_ID = 'Employee_Type_ID';
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
     * @uses self::VALUE_CONTINGENT_WORKER_TYPE_ID
     * @uses self::VALUE_EMPLOYEE_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CONTINGENT_WORKER_TYPE_ID,
            self::VALUE_EMPLOYEE_TYPE_ID,
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
