<?php

namespace EnumType;

/**
 * This class stands for Disability_Certification_AuthorityReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Disability_Certification_AuthorityReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Disability_Certification_Authority_ID'
     * @return string 'Disability_Certification_Authority_ID'
     */
    const VALUE_DISABILITY_CERTIFICATION_AUTHORITY_ID = 'Disability_Certification_Authority_ID';
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
     * @uses self::VALUE_DISABILITY_CERTIFICATION_AUTHORITY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DISABILITY_CERTIFICATION_AUTHORITY_ID,
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
