<?php

namespace EnumType;

/**
 * This class stands for Organization_OwnerReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Organization_OwnerReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Company_Reference_ID'
     * @return string 'Company_Reference_ID'
     */
    const VALUE_COMPANY_REFERENCE_ID = 'Company_Reference_ID';
    /**
     * Constant for value 'Contingent_Worker_ID'
     * @return string 'Contingent_Worker_ID'
     */
    const VALUE_CONTINGENT_WORKER_ID = 'Contingent_Worker_ID';
    /**
     * Constant for value 'Cost_Center_Reference_ID'
     * @return string 'Cost_Center_Reference_ID'
     */
    const VALUE_COST_CENTER_REFERENCE_ID = 'Cost_Center_Reference_ID';
    /**
     * Constant for value 'Custom_Organization_Reference_ID'
     * @return string 'Custom_Organization_Reference_ID'
     */
    const VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID = 'Custom_Organization_Reference_ID';
    /**
     * Constant for value 'Employee_ID'
     * @return string 'Employee_ID'
     */
    const VALUE_EMPLOYEE_ID = 'Employee_ID';
    /**
     * Constant for value 'Organization_Reference_ID'
     * @return string 'Organization_Reference_ID'
     */
    const VALUE_ORGANIZATION_REFERENCE_ID = 'Organization_Reference_ID';
    /**
     * Constant for value 'Region_Reference_ID'
     * @return string 'Region_Reference_ID'
     */
    const VALUE_REGION_REFERENCE_ID = 'Region_Reference_ID';
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
     * @uses self::VALUE_COMPANY_REFERENCE_ID
     * @uses self::VALUE_CONTINGENT_WORKER_ID
     * @uses self::VALUE_COST_CENTER_REFERENCE_ID
     * @uses self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_EMPLOYEE_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_REGION_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMPANY_REFERENCE_ID,
            self::VALUE_CONTINGENT_WORKER_ID,
            self::VALUE_COST_CENTER_REFERENCE_ID,
            self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID,
            self::VALUE_EMPLOYEE_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
            self::VALUE_REGION_REFERENCE_ID,
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
