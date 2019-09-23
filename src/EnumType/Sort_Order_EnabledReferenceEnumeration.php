<?php

namespace EnumType;

/**
 * This class stands for Sort_Order_EnabledReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Sort_Order_EnabledReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Business_Unit_Hierarchy_ID'
     * @return string 'Business_Unit_Hierarchy_ID'
     */
    const VALUE_BUSINESS_UNIT_HIERARCHY_ID = 'Business_Unit_Hierarchy_ID';
    /**
     * Constant for value 'Custom_Organization_Reference_ID'
     * @return string 'Custom_Organization_Reference_ID'
     */
    const VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID = 'Custom_Organization_Reference_ID';
    /**
     * Constant for value 'Fund_Hierarchy_ID'
     * @return string 'Fund_Hierarchy_ID'
     */
    const VALUE_FUND_HIERARCHY_ID = 'Fund_Hierarchy_ID';
    /**
     * Constant for value 'Gift_Hierarchy_ID'
     * @return string 'Gift_Hierarchy_ID'
     */
    const VALUE_GIFT_HIERARCHY_ID = 'Gift_Hierarchy_ID';
    /**
     * Constant for value 'Grant_Hierarchy_ID'
     * @return string 'Grant_Hierarchy_ID'
     */
    const VALUE_GRANT_HIERARCHY_ID = 'Grant_Hierarchy_ID';
    /**
     * Constant for value 'Ledger_Account_Summary_ID'
     * @return string 'Ledger_Account_Summary_ID'
     */
    const VALUE_LEDGER_ACCOUNT_SUMMARY_ID = 'Ledger_Account_Summary_ID';
    /**
     * Constant for value 'Location_ID'
     * @return string 'Location_ID'
     */
    const VALUE_LOCATION_ID = 'Location_ID';
    /**
     * Constant for value 'Organization_Reference_ID'
     * @return string 'Organization_Reference_ID'
     */
    const VALUE_ORGANIZATION_REFERENCE_ID = 'Organization_Reference_ID';
    /**
     * Constant for value 'Program_Hierarchy_ID'
     * @return string 'Program_Hierarchy_ID'
     */
    const VALUE_PROGRAM_HIERARCHY_ID = 'Program_Hierarchy_ID';
    /**
     * Constant for value 'Project_Hierarchy_ID'
     * @return string 'Project_Hierarchy_ID'
     */
    const VALUE_PROJECT_HIERARCHY_ID = 'Project_Hierarchy_ID';
    /**
     * Constant for value 'Resource_Category_Hierarchy_ID'
     * @return string 'Resource_Category_Hierarchy_ID'
     */
    const VALUE_RESOURCE_CATEGORY_HIERARCHY_ID = 'Resource_Category_Hierarchy_ID';
    /**
     * Constant for value 'Resource_Pool_Hierarchy_ID'
     * @return string 'Resource_Pool_Hierarchy_ID'
     */
    const VALUE_RESOURCE_POOL_HIERARCHY_ID = 'Resource_Pool_Hierarchy_ID';
    /**
     * Constant for value 'Revenue_Category_Hierarchy_ID'
     * @return string 'Revenue_Category_Hierarchy_ID'
     */
    const VALUE_REVENUE_CATEGORY_HIERARCHY_ID = 'Revenue_Category_Hierarchy_ID';
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
     * @uses self::VALUE_BUSINESS_UNIT_HIERARCHY_ID
     * @uses self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_FUND_HIERARCHY_ID
     * @uses self::VALUE_GIFT_HIERARCHY_ID
     * @uses self::VALUE_GRANT_HIERARCHY_ID
     * @uses self::VALUE_LEDGER_ACCOUNT_SUMMARY_ID
     * @uses self::VALUE_LOCATION_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_PROGRAM_HIERARCHY_ID
     * @uses self::VALUE_PROJECT_HIERARCHY_ID
     * @uses self::VALUE_RESOURCE_CATEGORY_HIERARCHY_ID
     * @uses self::VALUE_RESOURCE_POOL_HIERARCHY_ID
     * @uses self::VALUE_REVENUE_CATEGORY_HIERARCHY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BUSINESS_UNIT_HIERARCHY_ID,
            self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID,
            self::VALUE_FUND_HIERARCHY_ID,
            self::VALUE_GIFT_HIERARCHY_ID,
            self::VALUE_GRANT_HIERARCHY_ID,
            self::VALUE_LEDGER_ACCOUNT_SUMMARY_ID,
            self::VALUE_LOCATION_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
            self::VALUE_PROGRAM_HIERARCHY_ID,
            self::VALUE_PROJECT_HIERARCHY_ID,
            self::VALUE_RESOURCE_CATEGORY_HIERARCHY_ID,
            self::VALUE_RESOURCE_POOL_HIERARCHY_ID,
            self::VALUE_REVENUE_CATEGORY_HIERARCHY_ID,
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
