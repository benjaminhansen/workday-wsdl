<?php

namespace EnumType;

/**
 * This class stands for Compensation_MatrixReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Compensation_MatrixReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Merit_Increase_Matrix_ID'
     * @return string 'Merit_Increase_Matrix_ID'
     */
    const VALUE_MERIT_INCREASE_MATRIX_ID = 'Merit_Increase_Matrix_ID';
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
     * @uses self::VALUE_MERIT_INCREASE_MATRIX_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_MERIT_INCREASE_MATRIX_ID,
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
