<?php

namespace EnumType;

/**
 * This class stands for Job_Previous_System_HistoryReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Job_Previous_System_HistoryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Previous_System_Job_History_ID'
     * @return string 'Previous_System_Job_History_ID'
     */
    const VALUE_PREVIOUS_SYSTEM_JOB_HISTORY_ID = 'Previous_System_Job_History_ID';
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
     * @uses self::VALUE_PREVIOUS_SYSTEM_JOB_HISTORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PREVIOUS_SYSTEM_JOB_HISTORY_ID,
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
