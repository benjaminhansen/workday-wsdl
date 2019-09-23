<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Professional_Affiliation_ReferenceReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Professional_Affiliation_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Job_History_Company_ID'
     * @return string 'Job_History_Company_ID'
     */
    const VALUE_JOB_HISTORY_COMPANY_ID = 'Job_History_Company_ID';
    /**
     * Constant for value 'Professional_Affiliation_ID'
     * @return string 'Professional_Affiliation_ID'
     */
    const VALUE_PROFESSIONAL_AFFILIATION_ID = 'Professional_Affiliation_ID';
    /**
     * Constant for value 'School_ID'
     * @return string 'School_ID'
     */
    const VALUE_SCHOOL_ID = 'School_ID';
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
     * @uses self::VALUE_JOB_HISTORY_COMPANY_ID
     * @uses self::VALUE_PROFESSIONAL_AFFILIATION_ID
     * @uses self::VALUE_SCHOOL_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_JOB_HISTORY_COMPANY_ID,
            self::VALUE_PROFESSIONAL_AFFILIATION_ID,
            self::VALUE_SCHOOL_ID,
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
