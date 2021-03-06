<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Related_Person_for_WorkerReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Related_Person_for_WorkerReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Beneficiary_ID'
     * @return string 'Beneficiary_ID'
     */
    const VALUE_BENEFICIARY_ID = 'Beneficiary_ID';
    /**
     * Constant for value 'Dependent_ID'
     * @return string 'Dependent_ID'
     */
    const VALUE_DEPENDENT_ID = 'Dependent_ID';
    /**
     * Constant for value 'Emergency_Contact_ID'
     * @return string 'Emergency_Contact_ID'
     */
    const VALUE_EMERGENCY_CONTACT_ID = 'Emergency_Contact_ID';
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
     * @uses self::VALUE_BENEFICIARY_ID
     * @uses self::VALUE_DEPENDENT_ID
     * @uses self::VALUE_EMERGENCY_CONTACT_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BENEFICIARY_ID,
            self::VALUE_DEPENDENT_ID,
            self::VALUE_EMERGENCY_CONTACT_ID,
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
