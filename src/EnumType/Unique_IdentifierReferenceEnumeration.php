<?php

namespace EnumType;

/**
 * This class stands for Unique_IdentifierReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Unique_IdentifierReferenceEnumeration
{
    /**
     * Constant for value 'IID'
     * @return string 'IID'
     */
    const VALUE_IID = 'IID';
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
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
     * @uses self::VALUE_IID
     * @uses self::VALUE_WID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IID,
            self::VALUE_WID,
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
