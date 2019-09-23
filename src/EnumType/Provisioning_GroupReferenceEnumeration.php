<?php

namespace EnumType;

/**
 * This class stands for Provisioning_GroupReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Provisioning_GroupReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Provisioning_Group_Name'
     * @return string 'Provisioning_Group_Name'
     */
    const VALUE_PROVISIONING_GROUP_NAME = 'Provisioning_Group_Name';
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
     * @uses self::VALUE_PROVISIONING_GROUP_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_PROVISIONING_GROUP_NAME,
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
