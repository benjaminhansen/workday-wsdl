<?php

namespace EnumType;

/**
 * This class stands for Collective_Agreement_FactorReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Collective_Agreement_FactorReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Collective_Agreement_Factor_ID'
     * @return string 'Collective_Agreement_Factor_ID'
     */
    const VALUE_COLLECTIVE_AGREEMENT_FACTOR_ID = 'Collective_Agreement_Factor_ID';
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
     * @uses self::VALUE_COLLECTIVE_AGREEMENT_FACTOR_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COLLECTIVE_AGREEMENT_FACTOR_ID,
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
