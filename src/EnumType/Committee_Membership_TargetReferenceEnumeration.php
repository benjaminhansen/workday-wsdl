<?php

namespace EnumType;

/**
 * This class stands for Committee_Membership_TargetReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Committee_Membership_TargetReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Committee_Membership_Target_ID'
     * @return string 'Committee_Membership_Target_ID'
     */
    const VALUE_COMMITTEE_MEMBERSHIP_TARGET_ID = 'Committee_Membership_Target_ID';
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
     * @uses self::VALUE_COMMITTEE_MEMBERSHIP_TARGET_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMMITTEE_MEMBERSHIP_TARGET_ID,
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
