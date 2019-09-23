<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Reference_Letter_TemplateReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Reference_Letter_TemplateReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Reference_Letter_Template_ID'
     * @return string 'Reference_Letter_Template_ID'
     */
    const VALUE_REFERENCE_LETTER_TEMPLATE_ID = 'Reference_Letter_Template_ID';
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
     * @uses self::VALUE_REFERENCE_LETTER_TEMPLATE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_REFERENCE_LETTER_TEMPLATE_ID,
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
