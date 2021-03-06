<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Document_Category__All_ReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Document_Category__All_ReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Document_Category__Workday_Owned__ID'
     * @return string 'Document_Category__Workday_Owned__ID'
     */
    const VALUE_DOCUMENT_CATEGORY_WORKDAY_OWNED_ID = 'Document_Category__Workday_Owned__ID';
    /**
     * Constant for value 'Document_Category_ID'
     * @return string 'Document_Category_ID'
     */
    const VALUE_DOCUMENT_CATEGORY_ID = 'Document_Category_ID';
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
     * @uses self::VALUE_DOCUMENT_CATEGORY_WORKDAY_OWNED_ID
     * @uses self::VALUE_DOCUMENT_CATEGORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_DOCUMENT_CATEGORY_WORKDAY_OWNED_ID,
            self::VALUE_DOCUMENT_CATEGORY_ID,
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
