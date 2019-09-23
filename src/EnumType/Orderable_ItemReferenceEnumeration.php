<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Orderable_ItemReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Orderable_ItemReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Accounting_Journal_ID'
     * @return string 'Accounting_Journal_ID'
     */
    const VALUE_ACCOUNTING_JOURNAL_ID = 'Accounting_Journal_ID';
    /**
     * Constant for value 'Business_Unit_Hierarchy_ID'
     * @return string 'Business_Unit_Hierarchy_ID'
     */
    const VALUE_BUSINESS_UNIT_HIERARCHY_ID = 'Business_Unit_Hierarchy_ID';
    /**
     * Constant for value 'Business_Unit_ID'
     * @return string 'Business_Unit_ID'
     */
    const VALUE_BUSINESS_UNIT_ID = 'Business_Unit_ID';
    /**
     * Constant for value 'Candidate_ID'
     * @return string 'Candidate_ID'
     */
    const VALUE_CANDIDATE_ID = 'Candidate_ID';
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
     * Constant for value 'Fund_Hierarchy_ID'
     * @return string 'Fund_Hierarchy_ID'
     */
    const VALUE_FUND_HIERARCHY_ID = 'Fund_Hierarchy_ID';
    /**
     * Constant for value 'Fund_ID'
     * @return string 'Fund_ID'
     */
    const VALUE_FUND_ID = 'Fund_ID';
    /**
     * Constant for value 'Gift_Hierarchy_ID'
     * @return string 'Gift_Hierarchy_ID'
     */
    const VALUE_GIFT_HIERARCHY_ID = 'Gift_Hierarchy_ID';
    /**
     * Constant for value 'Gift_Reference_ID'
     * @return string 'Gift_Reference_ID'
     */
    const VALUE_GIFT_REFERENCE_ID = 'Gift_Reference_ID';
    /**
     * Constant for value 'Grant_Hierarchy_ID'
     * @return string 'Grant_Hierarchy_ID'
     */
    const VALUE_GRANT_HIERARCHY_ID = 'Grant_Hierarchy_ID';
    /**
     * Constant for value 'Grant_ID'
     * @return string 'Grant_ID'
     */
    const VALUE_GRANT_ID = 'Grant_ID';
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
     * Constant for value 'Program_ID'
     * @return string 'Program_ID'
     */
    const VALUE_PROGRAM_ID = 'Program_ID';
    /**
     * Constant for value 'Project_Hierarchy_ID'
     * @return string 'Project_Hierarchy_ID'
     */
    const VALUE_PROJECT_HIERARCHY_ID = 'Project_Hierarchy_ID';
    /**
     * Constant for value 'Project_ID'
     * @return string 'Project_ID'
     */
    const VALUE_PROJECT_ID = 'Project_ID';
    /**
     * Constant for value 'Region_Reference_ID'
     * @return string 'Region_Reference_ID'
     */
    const VALUE_REGION_REFERENCE_ID = 'Region_Reference_ID';
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
     * Constant for value 'Revenue_Category_ID'
     * @return string 'Revenue_Category_ID'
     */
    const VALUE_REVENUE_CATEGORY_ID = 'Revenue_Category_ID';
    /**
     * Constant for value 'Spend_Category_ID'
     * @return string 'Spend_Category_ID'
     */
    const VALUE_SPEND_CATEGORY_ID = 'Spend_Category_ID';
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
     * @uses self::VALUE_ACCOUNTING_JOURNAL_ID
     * @uses self::VALUE_BUSINESS_UNIT_HIERARCHY_ID
     * @uses self::VALUE_BUSINESS_UNIT_ID
     * @uses self::VALUE_CANDIDATE_ID
     * @uses self::VALUE_COMPANY_REFERENCE_ID
     * @uses self::VALUE_CONTINGENT_WORKER_ID
     * @uses self::VALUE_COST_CENTER_REFERENCE_ID
     * @uses self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_EMPLOYEE_ID
     * @uses self::VALUE_FUND_HIERARCHY_ID
     * @uses self::VALUE_FUND_ID
     * @uses self::VALUE_GIFT_HIERARCHY_ID
     * @uses self::VALUE_GIFT_REFERENCE_ID
     * @uses self::VALUE_GRANT_HIERARCHY_ID
     * @uses self::VALUE_GRANT_ID
     * @uses self::VALUE_LEDGER_ACCOUNT_SUMMARY_ID
     * @uses self::VALUE_LOCATION_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_PROGRAM_HIERARCHY_ID
     * @uses self::VALUE_PROGRAM_ID
     * @uses self::VALUE_PROJECT_HIERARCHY_ID
     * @uses self::VALUE_PROJECT_ID
     * @uses self::VALUE_REGION_REFERENCE_ID
     * @uses self::VALUE_RESOURCE_CATEGORY_HIERARCHY_ID
     * @uses self::VALUE_RESOURCE_POOL_HIERARCHY_ID
     * @uses self::VALUE_REVENUE_CATEGORY_HIERARCHY_ID
     * @uses self::VALUE_REVENUE_CATEGORY_ID
     * @uses self::VALUE_SPEND_CATEGORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACCOUNTING_JOURNAL_ID,
            self::VALUE_BUSINESS_UNIT_HIERARCHY_ID,
            self::VALUE_BUSINESS_UNIT_ID,
            self::VALUE_CANDIDATE_ID,
            self::VALUE_COMPANY_REFERENCE_ID,
            self::VALUE_CONTINGENT_WORKER_ID,
            self::VALUE_COST_CENTER_REFERENCE_ID,
            self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID,
            self::VALUE_EMPLOYEE_ID,
            self::VALUE_FUND_HIERARCHY_ID,
            self::VALUE_FUND_ID,
            self::VALUE_GIFT_HIERARCHY_ID,
            self::VALUE_GIFT_REFERENCE_ID,
            self::VALUE_GRANT_HIERARCHY_ID,
            self::VALUE_GRANT_ID,
            self::VALUE_LEDGER_ACCOUNT_SUMMARY_ID,
            self::VALUE_LOCATION_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
            self::VALUE_PROGRAM_HIERARCHY_ID,
            self::VALUE_PROGRAM_ID,
            self::VALUE_PROJECT_HIERARCHY_ID,
            self::VALUE_PROJECT_ID,
            self::VALUE_REGION_REFERENCE_ID,
            self::VALUE_RESOURCE_CATEGORY_HIERARCHY_ID,
            self::VALUE_RESOURCE_POOL_HIERARCHY_ID,
            self::VALUE_REVENUE_CATEGORY_HIERARCHY_ID,
            self::VALUE_REVENUE_CATEGORY_ID,
            self::VALUE_SPEND_CATEGORY_ID,
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
