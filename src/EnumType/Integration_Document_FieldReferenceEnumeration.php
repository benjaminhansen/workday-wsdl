<?php

namespace EnumType;

/**
 * This class stands for Integration_Document_FieldReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Integration_Document_FieldReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Integration_Document_Field_Name'
     * @return string 'Integration_Document_Field_Name'
     */
    const VALUE_INTEGRATION_DOCUMENT_FIELD_NAME = 'Integration_Document_Field_Name';
    /**
     * Constant for value 'Workday_Integration_Document_Field_Name'
     * @return string 'Workday_Integration_Document_Field_Name'
     */
    const VALUE_WORKDAY_INTEGRATION_DOCUMENT_FIELD_NAME = 'Workday_Integration_Document_Field_Name';
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
     * @uses self::VALUE_INTEGRATION_DOCUMENT_FIELD_NAME
     * @uses self::VALUE_WORKDAY_INTEGRATION_DOCUMENT_FIELD_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INTEGRATION_DOCUMENT_FIELD_NAME,
            self::VALUE_WORKDAY_INTEGRATION_DOCUMENT_FIELD_NAME,
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
