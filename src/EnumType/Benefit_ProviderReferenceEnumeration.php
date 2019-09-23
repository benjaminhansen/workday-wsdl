<?php

namespace EnumType;

/**
 * This class stands for Benefit_ProviderReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Benefit_ProviderReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Benefit_Provider_ID'
     * @return string 'Benefit_Provider_ID'
     */
    const VALUE_BENEFIT_PROVIDER_ID = 'Benefit_Provider_ID';
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
     * @uses self::VALUE_BENEFIT_PROVIDER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BENEFIT_PROVIDER_ID,
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
