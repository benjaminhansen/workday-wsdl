<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for StaffReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class StaffReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Business_Unit_ID'
     * @return string 'Business_Unit_ID'
     */
    const VALUE_BUSINESS_UNIT_ID = 'Business_Unit_ID';
    /**
     * Constant for value 'Company_Reference_ID'
     * @return string 'Company_Reference_ID'
     */
    const VALUE_COMPANY_REFERENCE_ID = 'Company_Reference_ID';
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
     * Constant for value 'Fund_ID'
     * @return string 'Fund_ID'
     */
    const VALUE_FUND_ID = 'Fund_ID';
    /**
     * Constant for value 'Gift_Reference_ID'
     * @return string 'Gift_Reference_ID'
     */
    const VALUE_GIFT_REFERENCE_ID = 'Gift_Reference_ID';
    /**
     * Constant for value 'Grant_ID'
     * @return string 'Grant_ID'
     */
    const VALUE_GRANT_ID = 'Grant_ID';
    /**
     * Constant for value 'Organization_Reference_ID'
     * @return string 'Organization_Reference_ID'
     */
    const VALUE_ORGANIZATION_REFERENCE_ID = 'Organization_Reference_ID';
    /**
     * Constant for value 'Program_ID'
     * @return string 'Program_ID'
     */
    const VALUE_PROGRAM_ID = 'Program_ID';
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
     * @uses self::VALUE_BUSINESS_UNIT_ID
     * @uses self::VALUE_COMPANY_REFERENCE_ID
     * @uses self::VALUE_COST_CENTER_REFERENCE_ID
     * @uses self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_FUND_ID
     * @uses self::VALUE_GIFT_REFERENCE_ID
     * @uses self::VALUE_GRANT_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_PROGRAM_ID
     * @uses self::VALUE_REGION_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BUSINESS_UNIT_ID,
            self::VALUE_COMPANY_REFERENCE_ID,
            self::VALUE_COST_CENTER_REFERENCE_ID,
            self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID,
            self::VALUE_FUND_ID,
            self::VALUE_GIFT_REFERENCE_ID,
            self::VALUE_GRANT_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
            self::VALUE_PROGRAM_ID,
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
