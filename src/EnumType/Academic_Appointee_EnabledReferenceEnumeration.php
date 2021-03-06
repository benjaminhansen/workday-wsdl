<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Academic_Appointee_EnabledReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Academic_Appointee_EnabledReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Academic_Affiliate_ID'
     * @return string 'Academic_Affiliate_ID'
     */
    const VALUE_ACADEMIC_AFFILIATE_ID = 'Academic_Affiliate_ID';
    /**
     * Constant for value 'Academic_Person_ID'
     * @return string 'Academic_Person_ID'
     */
    const VALUE_ACADEMIC_PERSON_ID = 'Academic_Person_ID';
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
     * Constant for value 'Student_ID'
     * @return string 'Student_ID'
     */
    const VALUE_STUDENT_ID = 'Student_ID';
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
     * @uses self::VALUE_ACADEMIC_AFFILIATE_ID
     * @uses self::VALUE_ACADEMIC_PERSON_ID
     * @uses self::VALUE_CONTINGENT_WORKER_ID
     * @uses self::VALUE_EMPLOYEE_ID
     * @uses self::VALUE_STUDENT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_AFFILIATE_ID,
            self::VALUE_ACADEMIC_PERSON_ID,
            self::VALUE_CONTINGENT_WORKER_ID,
            self::VALUE_EMPLOYEE_ID,
            self::VALUE_STUDENT_ID,
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
