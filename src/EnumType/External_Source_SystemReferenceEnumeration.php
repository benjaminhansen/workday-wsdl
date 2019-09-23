<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for External_Source_SystemReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_Source_SystemReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Customer_Team_Source_ID'
     * @return string 'Customer_Team_Source_ID'
     */
    const VALUE_CUSTOMER_TEAM_SOURCE_ID = 'Customer_Team_Source_ID';
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
     * @uses self::VALUE_CUSTOMER_TEAM_SOURCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CUSTOMER_TEAM_SOURCE_ID,
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
