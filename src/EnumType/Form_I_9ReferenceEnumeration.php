<?php

namespace EnumType;

/**
 * This class stands for Form_I-9ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Form_I_9ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Form_I-9_Reference_ID'
     * @return string 'Form_I-9_Reference_ID'
     */
    const VALUE_FORM_I_9_REFERENCE_ID = 'Form_I-9_Reference_ID';
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
     * @uses self::VALUE_FORM_I_9_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_FORM_I_9_REFERENCE_ID,
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
