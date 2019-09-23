<?php

namespace EnumType;

/**
 * This class stands for Tax_Authority_Form_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Tax_Authority_Form_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Tax_Authority_Form_Type'
     * @return string 'Tax_Authority_Form_Type'
     */
    const VALUE_TAX_AUTHORITY_FORM_TYPE = 'Tax_Authority_Form_Type';
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
     * @uses self::VALUE_TAX_AUTHORITY_FORM_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_TAX_AUTHORITY_FORM_TYPE,
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
