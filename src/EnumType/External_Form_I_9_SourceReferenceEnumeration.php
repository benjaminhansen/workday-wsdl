<?php

namespace EnumType;

/**
 * This class stands for External_Form_I-9_SourceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_Form_I_9_SourceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'External_Form_I-9_Source_ID'
     * @return string 'External_Form_I-9_Source_ID'
     */
    const VALUE_EXTERNAL_FORM_I_9_SOURCE_ID = 'External_Form_I-9_Source_ID';
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
     * @uses self::VALUE_EXTERNAL_FORM_I_9_SOURCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXTERNAL_FORM_I_9_SOURCE_ID,
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
