<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Job_ProfileReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Job_ProfileReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Job_Profile_ID'
     * @return string 'Job_Profile_ID'
     */
    const VALUE_JOB_PROFILE_ID = 'Job_Profile_ID';
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
     * @uses self::VALUE_JOB_PROFILE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_JOB_PROFILE_ID,
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
