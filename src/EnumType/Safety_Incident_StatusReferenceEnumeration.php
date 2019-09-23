<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Safety_Incident_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Safety_Incident_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Safety_Incident_Status_Code'
     * @return string 'Safety_Incident_Status_Code'
     */
    const VALUE_SAFETY_INCIDENT_STATUS_CODE = 'Safety_Incident_Status_Code';
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
     * @uses self::VALUE_SAFETY_INCIDENT_STATUS_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SAFETY_INCIDENT_STATUS_CODE,
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
