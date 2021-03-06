<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Academic_Unit_HierarchyReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Academic_Unit_HierarchyReferenceEnumeration
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
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_ACADEMIC_UNIT_HIERARCHY_ID,
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
