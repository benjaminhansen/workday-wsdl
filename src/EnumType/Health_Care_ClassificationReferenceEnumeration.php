<?php

namespace EnumType;

/**
 * This class stands for Health_Care_ClassificationReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Health_Care_ClassificationReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Health_Care_Classification_ID'
     * @return string 'Health_Care_Classification_ID'
     */
    const VALUE_HEALTH_CARE_CLASSIFICATION_ID = 'Health_Care_Classification_ID';
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
     * @uses self::VALUE_HEALTH_CARE_CLASSIFICATION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_HEALTH_CARE_CLASSIFICATION_ID,
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
