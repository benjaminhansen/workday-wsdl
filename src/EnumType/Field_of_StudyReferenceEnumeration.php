<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Field_of_StudyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Field_of_StudyReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Field_Of_Study_ID'
     * @return string 'Field_Of_Study_ID'
     */
    const VALUE_FIELD_OF_STUDY_ID = 'Field_Of_Study_ID';
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
     * @uses self::VALUE_FIELD_OF_STUDY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_FIELD_OF_STUDY_ID,
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
