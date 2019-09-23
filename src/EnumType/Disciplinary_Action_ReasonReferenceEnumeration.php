<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Disciplinary_Action_ReasonReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Disciplinary_Action_ReasonReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Disciplinary_Action_Reason_Code'
     * @return string 'Disciplinary_Action_Reason_Code'
     */
    const VALUE_DISCIPLINARY_ACTION_REASON_CODE = 'Disciplinary_Action_Reason_Code';
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
     * @uses self::VALUE_DISCIPLINARY_ACTION_REASON_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DISCIPLINARY_ACTION_REASON_CODE,
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
