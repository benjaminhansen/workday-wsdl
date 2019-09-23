<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Condition_RuleReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Condition_RuleReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Condition_Rule_ID'
     * @return string 'Condition_Rule_ID'
     */
    const VALUE_CONDITION_RULE_ID = 'Condition_Rule_ID';
    /**
     * Constant for value 'WCP_Component_ID'
     * @return string 'WCP_Component_ID'
     */
    const VALUE_WCP_COMPONENT_ID = 'WCP_Component_ID';
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
     * @uses self::VALUE_CONDITION_RULE_ID
     * @uses self::VALUE_WCP_COMPONENT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CONDITION_RULE_ID,
            self::VALUE_WCP_COMPONENT_ID,
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
