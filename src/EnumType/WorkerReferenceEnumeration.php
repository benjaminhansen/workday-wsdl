<?php

namespace EnumType;

/**
 * This class stands for WorkerReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class WorkerReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Contingent_Worker_ID'
     * @return string 'Contingent_Worker_ID'
     */
    const VALUE_CONTINGENT_WORKER_ID = 'Contingent_Worker_ID';
    /**
     * Constant for value 'Employee_ID'
     * @return string 'Employee_ID'
     */
    const VALUE_EMPLOYEE_ID = 'Employee_ID';
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
     * @uses self::VALUE_CONTINGENT_WORKER_ID
     * @uses self::VALUE_EMPLOYEE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CONTINGENT_WORKER_ID,
            self::VALUE_EMPLOYEE_ID,
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
