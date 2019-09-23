<?php

namespace EnumType;

/**
 * This class stands for Organization_GoalReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Organization_GoalReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Organization_Goal_ID'
     * @return string 'Organization_Goal_ID'
     */
    const VALUE_ORGANIZATION_GOAL_ID = 'Organization_Goal_ID';
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
     * @uses self::VALUE_ORGANIZATION_GOAL_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ORGANIZATION_GOAL_ID,
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
