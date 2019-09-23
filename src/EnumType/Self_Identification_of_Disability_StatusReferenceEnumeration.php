<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for
 * Self-Identification_of_Disability_StatusReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Self_Identification_of_Disability_StatusReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Self_Identification_of_Disability_Status_ID'
     * @return string 'Self_Identification_of_Disability_Status_ID'
     */
    const VALUE_SELF_IDENTIFICATION_OF_DISABILITY_STATUS_ID = 'Self_Identification_of_Disability_Status_ID';
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
     * @uses self::VALUE_SELF_IDENTIFICATION_OF_DISABILITY_STATUS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SELF_IDENTIFICATION_OF_DISABILITY_STATUS_ID,
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
