<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Relocation_AreaReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Relocation_AreaReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Relocation_Area_ID'
     * @return string 'Relocation_Area_ID'
     */
    const VALUE_RELOCATION_AREA_ID = 'Relocation_Area_ID';
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
     * @uses self::VALUE_RELOCATION_AREA_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_RELOCATION_AREA_ID,
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
