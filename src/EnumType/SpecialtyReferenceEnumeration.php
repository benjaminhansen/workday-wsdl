<?php

namespace EnumType;

/**
 * This class stands for SpecialtyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class SpecialtyReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Specialty_ID'
     * @return string 'Specialty_ID'
     */
    const VALUE_SPECIALTY_ID = 'Specialty_ID';
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
     * @uses self::VALUE_SPECIALTY_ID
     * @uses self::VALUE_SUBSPECIALTY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SPECIALTY_ID,
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
