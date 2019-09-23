<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Instant_Messenger_ReferenceReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Instant_Messenger_ReferenceReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Instant_Messenger_ID'
     * @return string 'Instant_Messenger_ID'
     */
    const VALUE_INSTANT_MESSENGER_ID = 'Instant_Messenger_ID';
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
     * @uses self::VALUE_INSTANT_MESSENGER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INSTANT_MESSENGER_ID,
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
