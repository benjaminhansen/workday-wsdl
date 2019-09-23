<?php

namespace EnumType;

/**
 * This class stands for Visa_ID_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Visa_ID_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Visa_ID_Type_ID'
     * @return string 'Visa_ID_Type_ID'
     */
    const VALUE_VISA_ID_TYPE_ID = 'Visa_ID_Type_ID';
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
     * @uses self::VALUE_VISA_ID_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_VISA_ID_TYPE_ID,
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
