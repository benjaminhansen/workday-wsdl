<?php

namespace EnumType;

/**
 * This class stands for Appointment_SpecialtyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Appointment_SpecialtyReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Appointment_Specialty_ID'
     * @return string 'Appointment_Specialty_ID'
     */
    const VALUE_APPOINTMENT_SPECIALTY_ID = 'Appointment_Specialty_ID';
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
     * @uses self::VALUE_APPOINTMENT_SPECIALTY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_APPOINTMENT_SPECIALTY_ID,
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
