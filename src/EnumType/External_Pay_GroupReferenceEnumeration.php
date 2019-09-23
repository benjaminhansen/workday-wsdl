<?php

namespace EnumType;

/**
 * This class stands for External_Pay_GroupReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_Pay_GroupReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Ext_Pay_Group_ID'
     * @return string 'Ext_Pay_Group_ID'
     */
    const VALUE_EXT_PAY_GROUP_ID = 'Ext_Pay_Group_ID';
    /**
     * Constant for value 'External_Pay_Group_ID'
     * @return string 'External_Pay_Group_ID'
     */
    const VALUE_EXTERNAL_PAY_GROUP_ID = 'External_Pay_Group_ID';
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
     * @uses self::VALUE_EXT_PAY_GROUP_ID
     * @uses self::VALUE_EXTERNAL_PAY_GROUP_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXT_PAY_GROUP_ID,
            self::VALUE_EXTERNAL_PAY_GROUP_ID,
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
