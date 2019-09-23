<?php

namespace EnumType;

/**
 * This class stands for Named_ProfessorshipReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Named_ProfessorshipReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Named_Professorship_ID'
     * @return string 'Named_Professorship_ID'
     */
    const VALUE_NAMED_PROFESSORSHIP_ID = 'Named_Professorship_ID';
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
     * @uses self::VALUE_NAMED_PROFESSORSHIP_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_NAMED_PROFESSORSHIP_ID,
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
