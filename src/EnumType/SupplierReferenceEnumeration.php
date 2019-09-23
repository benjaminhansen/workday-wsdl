<?php

namespace EnumType;

/**
 * This class stands for SupplierReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class SupplierReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Supplier_ID'
     * @return string 'Supplier_ID'
     */
    const VALUE_SUPPLIER_ID = 'Supplier_ID';
    /**
     * Constant for value 'Supplier_Reference_ID'
     * @return string 'Supplier_Reference_ID'
     */
    const VALUE_SUPPLIER_REFERENCE_ID = 'Supplier_Reference_ID';
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
     * @uses self::VALUE_SUPPLIER_ID
     * @uses self::VALUE_SUPPLIER_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SUPPLIER_ID,
            self::VALUE_SUPPLIER_REFERENCE_ID,
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
