<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Termination_SubcategoryReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Termination_SubcategoryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Event_Classification_Subcategory_ID'
     * @return string 'Event_Classification_Subcategory_ID'
     */
    const VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID = 'Event_Classification_Subcategory_ID';
    /**
     * Constant for value 'Termination_Subcategory_ID'
     * @return string 'Termination_Subcategory_ID'
     */
    const VALUE_TERMINATION_SUBCATEGORY_ID = 'Termination_Subcategory_ID';
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
     * @uses self::VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID
     * @uses self::VALUE_TERMINATION_SUBCATEGORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID,
            self::VALUE_TERMINATION_SUBCATEGORY_ID,
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
