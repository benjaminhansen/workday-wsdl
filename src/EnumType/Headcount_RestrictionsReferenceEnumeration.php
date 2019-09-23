<?php

namespace EnumType;

/**
 * This class stands for Headcount_RestrictionsReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Headcount_RestrictionsReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Headcount_Restrictions_ID'
     * @return string 'Headcount_Restrictions_ID'
     */
    const VALUE_HEADCOUNT_RESTRICTIONS_ID = 'Headcount_Restrictions_ID';
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
     * @uses self::VALUE_HEADCOUNT_RESTRICTIONS_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_HEADCOUNT_RESTRICTIONS_ID,
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
