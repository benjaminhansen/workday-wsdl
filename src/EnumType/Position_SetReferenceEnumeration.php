<?php

namespace EnumType;

/**
 * This class stands for Position_SetReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Position_SetReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Academic_Unit_Hierarchy_ID'
     * @return string 'Academic_Unit_Hierarchy_ID'
     */
    const VALUE_ACADEMIC_UNIT_HIERARCHY_ID = 'Academic_Unit_Hierarchy_ID';
    /**
     * Constant for value 'Academic_Unit_ID'
     * @return string 'Academic_Unit_ID'
     */
    const VALUE_ACADEMIC_UNIT_ID = 'Academic_Unit_ID';
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
     * Constant for value 'Candidate_Pool_ID'
     * @return string 'Candidate_Pool_ID'
     */
    const VALUE_CANDIDATE_POOL_ID = 'Candidate_Pool_ID';
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
     * Constant for value 'Dynamic_Talent_Pool_ID'
     * @return string 'Dynamic_Talent_Pool_ID'
     */
    const VALUE_DYNAMIC_TALENT_POOL_ID = 'Dynamic_Talent_Pool_ID';
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
     * Constant for value 'Succession_Pool_ID'
     * @return string 'Succession_Pool_ID'
     */
    const VALUE_SUCCESSION_POOL_ID = 'Succession_Pool_ID';
    /**
     * Constant for value 'Talent_Pool_ID'
     * @return string 'Talent_Pool_ID'
     */
    const VALUE_TALENT_POOL_ID = 'Talent_Pool_ID';
    /**
     * Constant for value 'Union_ID'
     * @return string 'Union_ID'
     */
    const VALUE_UNION_ID = 'Union_ID';
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
     * @uses self::VALUE_ACADEMIC_UNIT_HIERARCHY_ID
     * @uses self::VALUE_ACADEMIC_UNIT_ID
     * @uses self::VALUE_BUSINESS_UNIT_HIERARCHY_ID
     * @uses self::VALUE_BUSINESS_UNIT_ID
     * @uses self::VALUE_CANDIDATE_POOL_ID
     * @uses self::VALUE_COMPANY_REFERENCE_ID
     * @uses self::VALUE_COST_CENTER_REFERENCE_ID
     * @uses self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_DYNAMIC_TALENT_POOL_ID
     * @uses self::VALUE_FUND_HIERARCHY_ID
     * @uses self::VALUE_FUND_ID
     * @uses self::VALUE_GIFT_HIERARCHY_ID
     * @uses self::VALUE_GIFT_REFERENCE_ID
     * @uses self::VALUE_GRANT_HIERARCHY_ID
     * @uses self::VALUE_GRANT_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @uses self::VALUE_PROGRAM_HIERARCHY_ID
     * @uses self::VALUE_PROGRAM_ID
     * @uses self::VALUE_PROJECT_ID
     * @uses self::VALUE_REGION_REFERENCE_ID
     * @uses self::VALUE_SUCCESSION_POOL_ID
     * @uses self::VALUE_TALENT_POOL_ID
     * @uses self::VALUE_UNION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_UNIT_HIERARCHY_ID,
            self::VALUE_ACADEMIC_UNIT_ID,
            self::VALUE_BUSINESS_UNIT_HIERARCHY_ID,
            self::VALUE_BUSINESS_UNIT_ID,
            self::VALUE_CANDIDATE_POOL_ID,
            self::VALUE_COMPANY_REFERENCE_ID,
            self::VALUE_COST_CENTER_REFERENCE_ID,
            self::VALUE_CUSTOM_ORGANIZATION_REFERENCE_ID,
            self::VALUE_DYNAMIC_TALENT_POOL_ID,
            self::VALUE_FUND_HIERARCHY_ID,
            self::VALUE_FUND_ID,
            self::VALUE_GIFT_HIERARCHY_ID,
            self::VALUE_GIFT_REFERENCE_ID,
            self::VALUE_GRANT_HIERARCHY_ID,
            self::VALUE_GRANT_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
            self::VALUE_PROGRAM_HIERARCHY_ID,
            self::VALUE_PROGRAM_ID,
            self::VALUE_PROJECT_ID,
            self::VALUE_REGION_REFERENCE_ID,
            self::VALUE_SUCCESSION_POOL_ID,
            self::VALUE_TALENT_POOL_ID,
            self::VALUE_UNION_ID,
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
