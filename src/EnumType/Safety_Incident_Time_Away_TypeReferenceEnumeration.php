<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Safety_Incident_Time_Away_TypeReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Safety_Incident_Time_Away_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Safety_Incident_Time_Away_Type_ID'
     * @return string 'Safety_Incident_Time_Away_Type_ID'
     */
    const VALUE_SAFETY_INCIDENT_TIME_AWAY_TYPE_ID = 'Safety_Incident_Time_Away_Type_ID';
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
     * @uses self::VALUE_SAFETY_INCIDENT_TIME_AWAY_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SAFETY_INCIDENT_TIME_AWAY_TYPE_ID,
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
