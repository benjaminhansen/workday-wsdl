<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for
 * Form_I-9_Citizenship_Status__Workday_Owned_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Form_I_9_Citizenship_Status__Workday_Owned_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Citizenship_Status_Type'
     * @return string 'Citizenship_Status_Type'
     */
    const VALUE_CITIZENSHIP_STATUS_TYPE = 'Citizenship_Status_Type';
    /**
     * Constant for value 'EVerify_Citizenship_Status_ID'
     * @return string 'EVerify_Citizenship_Status_ID'
     */
    const VALUE_EVERIFY_CITIZENSHIP_STATUS_ID = 'EVerify_Citizenship_Status_ID';
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
     * @uses self::VALUE_CITIZENSHIP_STATUS_TYPE
     * @uses self::VALUE_EVERIFY_CITIZENSHIP_STATUS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CITIZENSHIP_STATUS_TYPE,
            self::VALUE_EVERIFY_CITIZENSHIP_STATUS_ID,
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
