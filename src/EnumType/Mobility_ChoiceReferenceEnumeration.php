<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Mobility_ChoiceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Mobility_ChoiceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Mobility_Choice_ID'
     * @return string 'Mobility_Choice_ID'
     */
    const VALUE_MOBILITY_CHOICE_ID = 'Mobility_Choice_ID';
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
     * @uses self::VALUE_MOBILITY_CHOICE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_MOBILITY_CHOICE_ID,
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
