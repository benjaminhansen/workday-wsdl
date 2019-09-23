<?php

namespace EnumType;

/**
 * This class stands for License_Identifier_ReferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class License_Identifier_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'License_Identifier_Reference_ID'
     * @return string 'License_Identifier_Reference_ID'
     */
    const VALUE_LICENSE_IDENTIFIER_REFERENCE_ID = 'License_Identifier_Reference_ID';
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
     * @uses self::VALUE_LICENSE_IDENTIFIER_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LICENSE_IDENTIFIER_REFERENCE_ID,
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
