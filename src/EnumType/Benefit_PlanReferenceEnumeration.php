<?php

namespace EnumType;

/**
 * This class stands for Benefit_PlanReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Benefit_PlanReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Additional_Benefits_Plan_ID'
     * @return string 'Additional_Benefits_Plan_ID'
     */
    const VALUE_ADDITIONAL_BENEFITS_PLAN_ID = 'Additional_Benefits_Plan_ID';
    /**
     * Constant for value 'Defined_Contribution_Plan_ID'
     * @return string 'Defined_Contribution_Plan_ID'
     */
    const VALUE_DEFINED_CONTRIBUTION_PLAN_ID = 'Defined_Contribution_Plan_ID';
    /**
     * Constant for value 'Health_Care_Coverage_Plan_ID'
     * @return string 'Health_Care_Coverage_Plan_ID'
     */
    const VALUE_HEALTH_CARE_COVERAGE_PLAN_ID = 'Health_Care_Coverage_Plan_ID';
    /**
     * Constant for value 'Health_Savings_Account_Plan_ID'
     * @return string 'Health_Savings_Account_Plan_ID'
     */
    const VALUE_HEALTH_SAVINGS_ACCOUNT_PLAN_ID = 'Health_Savings_Account_Plan_ID';
    /**
     * Constant for value 'Insurance_Coverage_Plan_ID'
     * @return string 'Insurance_Coverage_Plan_ID'
     */
    const VALUE_INSURANCE_COVERAGE_PLAN_ID = 'Insurance_Coverage_Plan_ID';
    /**
     * Constant for value 'Spending_Account_Plan_ID'
     * @return string 'Spending_Account_Plan_ID'
     */
    const VALUE_SPENDING_ACCOUNT_PLAN_ID = 'Spending_Account_Plan_ID';
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
     * @uses self::VALUE_ADDITIONAL_BENEFITS_PLAN_ID
     * @uses self::VALUE_DEFINED_CONTRIBUTION_PLAN_ID
     * @uses self::VALUE_HEALTH_CARE_COVERAGE_PLAN_ID
     * @uses self::VALUE_HEALTH_SAVINGS_ACCOUNT_PLAN_ID
     * @uses self::VALUE_INSURANCE_COVERAGE_PLAN_ID
     * @uses self::VALUE_SPENDING_ACCOUNT_PLAN_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ADDITIONAL_BENEFITS_PLAN_ID,
            self::VALUE_DEFINED_CONTRIBUTION_PLAN_ID,
            self::VALUE_HEALTH_CARE_COVERAGE_PLAN_ID,
            self::VALUE_HEALTH_SAVINGS_ACCOUNT_PLAN_ID,
            self::VALUE_INSURANCE_COVERAGE_PLAN_ID,
            self::VALUE_SPENDING_ACCOUNT_PLAN_ID,
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
