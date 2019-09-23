<?php

namespace EnumType;

/**
 * This class stands for LGBT_IdentificationReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class LGBT_IdentificationReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'LGBT_Identification_ID'
     * @return string 'LGBT_Identification_ID'
     */
    const VALUE_LGBT_IDENTIFICATION_ID = 'LGBT_Identification_ID';
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
     * @uses self::VALUE_LGBT_IDENTIFICATION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LGBT_IDENTIFICATION_ID,
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
