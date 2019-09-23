<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Student_Award_SourceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Student_Award_SourceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Student_Award_Source_ID'
     * @return string 'Student_Award_Source_ID'
     */
    const VALUE_STUDENT_AWARD_SOURCE_ID = 'Student_Award_Source_ID';
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
     * @uses self::VALUE_STUDENT_AWARD_SOURCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_STUDENT_AWARD_SOURCE_ID,
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
