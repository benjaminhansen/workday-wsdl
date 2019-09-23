<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Loss_ImpactReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Loss_ImpactReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Loss_Impact_Code'
     * @return string 'Loss_Impact_Code'
     */
    const VALUE_LOSS_IMPACT_CODE = 'Loss_Impact_Code';
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
     * @uses self::VALUE_LOSS_IMPACT_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_LOSS_IMPACT_CODE,
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
