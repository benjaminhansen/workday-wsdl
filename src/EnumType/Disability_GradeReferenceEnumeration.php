<?php

namespace EnumType;

/**
 * This class stands for Disability_GradeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Disability_GradeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Disability_Grade_ID'
     * @return string 'Disability_Grade_ID'
     */
    const VALUE_DISABILITY_GRADE_ID = 'Disability_Grade_ID';
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
     * @uses self::VALUE_DISABILITY_GRADE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DISABILITY_GRADE_ID,
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
