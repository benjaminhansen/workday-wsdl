<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for External_EEO-1_DataReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_EEO_1_DataReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'External_EEO-1_Data_Code'
     * @return string 'External_EEO-1_Data_Code'
     */
    const VALUE_EXTERNAL_EEO_1_DATA_CODE = 'External_EEO-1_Data_Code';
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
     * @uses self::VALUE_EXTERNAL_EEO_1_DATA_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXTERNAL_EEO_1_DATA_CODE,
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
