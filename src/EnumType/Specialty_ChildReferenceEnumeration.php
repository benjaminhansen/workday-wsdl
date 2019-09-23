<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Specialty_ChildReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Specialty_ChildReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Subspecialty_ID'
     * @return string 'Subspecialty_ID'
     */
    const VALUE_SUBSPECIALTY_ID = 'Subspecialty_ID';
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
     * @uses self::VALUE_SUBSPECIALTY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SUBSPECIALTY_ID,
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
