<?php

namespace EnumType;

/**
 * This class stands for Unit_of_MeasureReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Unit_of_MeasureReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'UN_CEFACT_Common_Code_ID'
     * @return string 'UN_CEFACT_Common_Code_ID'
     */
    const VALUE_UN_CEFACT_COMMON_CODE_ID = 'UN_CEFACT_Common_Code_ID';
    /**
     * Constant for value 'UOM_EDI_Code_ID'
     * @return string 'UOM_EDI_Code_ID'
     */
    const VALUE_UOM_EDI_CODE_ID = 'UOM_EDI_Code_ID';
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
     * @uses self::VALUE_UN_CEFACT_COMMON_CODE_ID
     * @uses self::VALUE_UOM_EDI_CODE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_UN_CEFACT_COMMON_CODE_ID,
            self::VALUE_UOM_EDI_CODE_ID,
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
