<?php

namespace EnumType;

/**
 * This class stands for CIP_Code__Workday_Owned_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class CIP_Code__Workday_Owned_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Cip_Code_ID'
     * @return string 'Cip_Code_ID'
     */
    const VALUE_CIP_CODE_ID = 'Cip_Code_ID';
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
     * @uses self::VALUE_CIP_CODE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_CIP_CODE_ID,
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
