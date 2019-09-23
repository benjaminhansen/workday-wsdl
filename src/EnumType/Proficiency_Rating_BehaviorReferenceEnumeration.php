<?php

namespace EnumType;

/**
 * This class stands for Proficiency_Rating_BehaviorReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Proficiency_Rating_BehaviorReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Proficiency_Rating_Behavior_ID'
     * @return string 'Proficiency_Rating_Behavior_ID'
     */
    const VALUE_PROFICIENCY_RATING_BEHAVIOR_ID = 'Proficiency_Rating_Behavior_ID';
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
     * @uses self::VALUE_PROFICIENCY_RATING_BEHAVIOR_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PROFICIENCY_RATING_BEHAVIOR_ID,
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
