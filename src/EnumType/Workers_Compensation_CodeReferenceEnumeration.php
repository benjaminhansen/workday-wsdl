<?php

namespace EnumType;

/**
 * This class stands for Workers_Compensation_CodeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Workers_Compensation_CodeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Workers_Compensation_ID'
     * @return string 'Workers_Compensation_ID'
     */
    const VALUE_WORKERS_COMPENSATION_ID = 'Workers_Compensation_ID';
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
     * @uses self::VALUE_WORKERS_COMPENSATION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_WORKERS_COMPENSATION_ID,
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
