<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for
 * Country_Predefined_Person_Name_Component_ValueReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Country_Predefined_Person_Name_Component_ValueReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Predefined_Name_Component_ID'
     * @return string 'Predefined_Name_Component_ID'
     */
    const VALUE_PREDEFINED_NAME_COMPONENT_ID = 'Predefined_Name_Component_ID';
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
     * @uses self::VALUE_PREDEFINED_NAME_COMPONENT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PREDEFINED_NAME_COMPONENT_ID,
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
