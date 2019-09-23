<?php

namespace EnumType;

/**
 * This class stands for Compensation_PackageReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Compensation_PackageReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Compensation_Package_ID'
     * @return string 'Compensation_Package_ID'
     */
    const VALUE_COMPENSATION_PACKAGE_ID = 'Compensation_Package_ID';
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
     * @uses self::VALUE_COMPENSATION_PACKAGE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPENSATION_PACKAGE_ID,
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
