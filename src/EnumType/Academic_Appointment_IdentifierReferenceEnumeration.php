<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Academic_Appointment_IdentifierReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Academic_Appointment_IdentifierReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Academic_Appointment_Identifier_ID'
     * @return string 'Academic_Appointment_Identifier_ID'
     */
    const VALUE_ACADEMIC_APPOINTMENT_IDENTIFIER_ID = 'Academic_Appointment_Identifier_ID';
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
     * @uses self::VALUE_ACADEMIC_APPOINTMENT_IDENTIFIER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_APPOINTMENT_IDENTIFIER_ID,
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
