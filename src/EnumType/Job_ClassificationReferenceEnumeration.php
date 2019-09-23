<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Job_ClassificationReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Job_ClassificationReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Job_Classification_Reference_ID'
     * @return string 'Job_Classification_Reference_ID'
     */
    const VALUE_JOB_CLASSIFICATION_REFERENCE_ID = 'Job_Classification_Reference_ID';
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
     * @uses self::VALUE_JOB_CLASSIFICATION_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_JOB_CLASSIFICATION_REFERENCE_ID,
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
