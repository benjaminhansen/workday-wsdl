<?php

namespace EnumType;

/**
 * This class stands for Political_AffiliationReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Political_AffiliationReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Political_Affiliation_ID'
     * @return string 'Political_Affiliation_ID'
     */
    const VALUE_POLITICAL_AFFILIATION_ID = 'Political_Affiliation_ID';
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
     * @uses self::VALUE_POLITICAL_AFFILIATION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_POLITICAL_AFFILIATION_ID,
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
