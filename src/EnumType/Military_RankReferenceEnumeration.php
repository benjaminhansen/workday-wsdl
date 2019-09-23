<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Military_RankReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Military_RankReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Military_Rank_ID'
     * @return string 'Military_Rank_ID'
     */
    const VALUE_MILITARY_RANK_ID = 'Military_Rank_ID';
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
     * @uses self::VALUE_MILITARY_RANK_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_MILITARY_RANK_ID,
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
