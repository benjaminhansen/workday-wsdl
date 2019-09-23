<?php

namespace EnumType;

/**
 * This class stands for
 * External_Disability_Self-Identification_RecordReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_Disability_Self_Identification_RecordReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'External_Disability_Self-Identification_Record_ID'
     * @return string 'External_Disability_Self-Identification_Record_ID'
     */
    const VALUE_EXTERNAL_DISABILITY_SELF_IDENTIFICATION_RECORD_ID = 'External_Disability_Self-Identification_Record_ID';
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
     * @uses self::VALUE_EXTERNAL_DISABILITY_SELF_IDENTIFICATION_RECORD_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXTERNAL_DISABILITY_SELF_IDENTIFICATION_RECORD_ID,
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
