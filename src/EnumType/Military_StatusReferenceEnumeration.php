<?php

namespace EnumType;

/**
 * This class stands for Military_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Military_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Armed_Forces_Status_ID'
     * @return string 'Armed_Forces_Status_ID'
     */
    const VALUE_ARMED_FORCES_STATUS_ID = 'Armed_Forces_Status_ID';
    /**
     * Constant for value 'Military_Status_ID'
     * @return string 'Military_Status_ID'
     */
    const VALUE_MILITARY_STATUS_ID = 'Military_Status_ID';
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
     * @uses self::VALUE_ARMED_FORCES_STATUS_ID
     * @uses self::VALUE_MILITARY_STATUS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ARMED_FORCES_STATUS_ID,
            self::VALUE_MILITARY_STATUS_ID,
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
