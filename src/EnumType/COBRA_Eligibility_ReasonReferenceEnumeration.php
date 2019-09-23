<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for COBRA_Eligibility_ReasonReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class COBRA_Eligibility_ReasonReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'COBRA_Eligibility_Reason_ID'
     * @return string 'COBRA_Eligibility_Reason_ID'
     */
    const VALUE_COBRA_ELIGIBILITY_REASON_ID = 'COBRA_Eligibility_Reason_ID';
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
     * @uses self::VALUE_COBRA_ELIGIBILITY_REASON_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COBRA_ELIGIBILITY_REASON_ID,
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
