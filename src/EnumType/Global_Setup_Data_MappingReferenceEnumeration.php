<?php

namespace EnumType;

/**
 * This class stands for Global_Setup_Data_MappingReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Global_Setup_Data_MappingReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Global_Setup_Data_Mapping_ID'
     * @return string 'Global_Setup_Data_Mapping_ID'
     */
    const VALUE_GLOBAL_SETUP_DATA_MAPPING_ID = 'Global_Setup_Data_Mapping_ID';
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
     * @uses self::VALUE_GLOBAL_SETUP_DATA_MAPPING_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_GLOBAL_SETUP_DATA_MAPPING_ID,
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
