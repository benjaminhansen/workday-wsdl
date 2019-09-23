<?php

namespace EnumType;

/**
 * This class stands for
 * External_Field_and_Parameter_Initialization_ProviderReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class External_Field_and_Parameter_Initialization_ProviderReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Integration_System_ID'
     * @return string 'Integration_System_ID'
     */
    const VALUE_INTEGRATION_SYSTEM_ID = 'Integration_System_ID';
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
     * @uses self::VALUE_INTEGRATION_SYSTEM_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_INTEGRATION_SYSTEM_ID,
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
