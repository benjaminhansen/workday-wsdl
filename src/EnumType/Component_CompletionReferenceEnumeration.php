<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Component_CompletionReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Component_CompletionReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Component_Completion_ID'
     * @return string 'Component_Completion_ID'
     */
    const VALUE_COMPONENT_COMPLETION_ID = 'Component_Completion_ID';
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
     * @uses self::VALUE_COMPONENT_COMPLETION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPONENT_COMPLETION_ID,
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
