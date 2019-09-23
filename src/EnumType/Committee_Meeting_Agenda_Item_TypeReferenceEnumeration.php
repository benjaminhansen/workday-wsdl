<?php

namespace EnumType;

/**
 * This class stands for Committee_Meeting_Agenda_Item_TypeReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Committee_Meeting_Agenda_Item_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Committee_Meeting_Agenda_Item_Type_Reference'
     * @return string 'Committee_Meeting_Agenda_Item_Type_Reference'
     */
    const VALUE_COMMITTEE_MEETING_AGENDA_ITEM_TYPE_REFERENCE = 'Committee_Meeting_Agenda_Item_Type_Reference';
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
     * @uses self::VALUE_COMMITTEE_MEETING_AGENDA_ITEM_TYPE_REFERENCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_COMMITTEE_MEETING_AGENDA_ITEM_TYPE_REFERENCE,
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
