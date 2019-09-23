<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Professional_Affiliation_Type__All_ReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Professional_Affiliation_Type__All_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Professional_Affiliation_Type___metadata_'
     * @return string 'Professional_Affiliation_Type___metadata_'
     */
    const VALUE_PROFESSIONAL_AFFILIATION_TYPE_METADATA = 'Professional_Affiliation_Type___metadata_';
    /**
     * Constant for value 'Professional_Affiliation_Type_ID'
     * @return string 'Professional_Affiliation_Type_ID'
     */
    const VALUE_PROFESSIONAL_AFFILIATION_TYPE_ID = 'Professional_Affiliation_Type_ID';
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
     * @uses self::VALUE_PROFESSIONAL_AFFILIATION_TYPE_METADATA
     * @uses self::VALUE_PROFESSIONAL_AFFILIATION_TYPE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PROFESSIONAL_AFFILIATION_TYPE_METADATA,
            self::VALUE_PROFESSIONAL_AFFILIATION_TYPE_ID,
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
