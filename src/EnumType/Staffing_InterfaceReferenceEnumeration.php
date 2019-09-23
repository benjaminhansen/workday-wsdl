<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Staffing_InterfaceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Staffing_InterfaceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Headcount_Restrictions_ID'
     * @return string 'Headcount_Restrictions_ID'
     */
    const VALUE_HEADCOUNT_RESTRICTIONS_ID = 'Headcount_Restrictions_ID';
    /**
     * Constant for value 'Position_ID'
     * @return string 'Position_ID'
     */
    const VALUE_POSITION_ID = 'Position_ID';
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
     * @uses self::VALUE_HEADCOUNT_RESTRICTIONS_ID
     * @uses self::VALUE_POSITION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_HEADCOUNT_RESTRICTIONS_ID,
            self::VALUE_POSITION_ID,
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
