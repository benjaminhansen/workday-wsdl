<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for External_Payroll_EntityReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class External_Payroll_EntityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'External_Payroll_Entity_ID'
     * @return string 'External_Payroll_Entity_ID'
     */
    const VALUE_EXTERNAL_PAYROLL_ENTITY_ID = 'External_Payroll_Entity_ID';
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
     * @uses self::VALUE_EXTERNAL_PAYROLL_ENTITY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EXTERNAL_PAYROLL_ENTITY_ID,
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
