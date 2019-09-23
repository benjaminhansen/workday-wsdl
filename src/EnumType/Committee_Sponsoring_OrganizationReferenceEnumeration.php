<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Committee_Sponsoring_OrganizationReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Committee_Sponsoring_OrganizationReferenceEnumeration
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
     * Constant for value 'Company_Reference_ID'
     * @return string 'Company_Reference_ID'
     */
    const VALUE_COMPANY_REFERENCE_ID = 'Company_Reference_ID';
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
     * @uses self::VALUE_COMPANY_REFERENCE_ID
     * @uses self::VALUE_GRANT_HIERARCHY_ID
     * @uses self::VALUE_GRANT_ID
     * @uses self::VALUE_ORGANIZATION_REFERENCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_UNIT_HIERARCHY_ID,
            self::VALUE_ACADEMIC_UNIT_ID,
            self::VALUE_COMPANY_REFERENCE_ID,
            self::VALUE_GRANT_HIERARCHY_ID,
            self::VALUE_GRANT_ID,
            self::VALUE_ORGANIZATION_REFERENCE_ID,
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
