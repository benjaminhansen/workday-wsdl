<?php

namespace EnumType;

/**
 * This class stands for National_ID_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class National_ID_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'National_ID_Type_Code'
     * @return string 'National_ID_Type_Code'
     */
    const VALUE_NATIONAL_ID_TYPE_CODE = 'National_ID_Type_Code';
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
     * @uses self::VALUE_NATIONAL_ID_TYPE_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_NATIONAL_ID_TYPE_CODE,
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
