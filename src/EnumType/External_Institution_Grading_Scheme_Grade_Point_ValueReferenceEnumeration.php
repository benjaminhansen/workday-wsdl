<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for
 * External_Institution_Grading_Scheme_Grade_Point_ValueReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class External_Institution_Grading_Scheme_Grade_Point_ValueReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'External_Institution_Grading_Scheme_Grade_Point_Value_ID'
     * @return string 'External_Institution_Grading_Scheme_Grade_Point_Value_ID'
     */
    const VALUE_EXTERNAL_INSTITUTION_GRADING_SCHEME_GRADE_POINT_VALUE_ID = 'External_Institution_Grading_Scheme_Grade_Point_Value_ID';
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
     * @uses self::VALUE_EXTERNAL_INSTITUTION_GRADING_SCHEME_GRADE_POINT_VALUE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXTERNAL_INSTITUTION_GRADING_SCHEME_GRADE_POINT_VALUE_ID,
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
