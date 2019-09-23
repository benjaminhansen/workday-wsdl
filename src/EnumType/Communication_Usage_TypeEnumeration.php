<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Communication_Usage_TypeEnumeration EnumType
 * @subpackage Enumerations
 */
class Communication_Usage_TypeEnumeration
{
    /**
     * Constant for value 'Academic Contact'
     * @return string 'Academic Contact'
     */
    const VALUE_ACADEMIC_CONTACT = 'Academic Contact';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Home'
     * @return string 'Home'
     */
    const VALUE_HOME = 'Home';
    /**
     * Constant for value 'Institutional'
     * @return string 'Institutional'
     */
    const VALUE_INSTITUTIONAL = 'Institutional';
    /**
     * Constant for value 'Lockbox'
     * @return string 'Lockbox'
     */
    const VALUE_LOCKBOX = 'Lockbox';
    /**
     * Constant for value 'Work'
     * @return string 'Work'
     */
    const VALUE_WORK = 'Work';
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
     * @uses self::VALUE_ACADEMIC_CONTACT
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_HOME
     * @uses self::VALUE_INSTITUTIONAL
     * @uses self::VALUE_LOCKBOX
     * @uses self::VALUE_WORK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACADEMIC_CONTACT,
            self::VALUE_BUSINESS,
            self::VALUE_HOME,
            self::VALUE_INSTITUTIONAL,
            self::VALUE_LOCKBOX,
            self::VALUE_WORK,
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
