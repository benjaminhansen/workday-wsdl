<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Event_Classification_SubcategoryReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Event_Classification_SubcategoryReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Benefits_Event_Subcategory_ID'
     * @return string 'Benefits_Event_Subcategory_ID'
     */
    const VALUE_BENEFITS_EVENT_SUBCATEGORY_ID = 'Benefits_Event_Subcategory_ID';
    /**
     * Constant for value 'Change_Job_Subcategory_ID'
     * @return string 'Change_Job_Subcategory_ID'
     */
    const VALUE_CHANGE_JOB_SUBCATEGORY_ID = 'Change_Job_Subcategory_ID';
    /**
     * Constant for value 'End_Additional_Job_Subcategory_ID'
     * @return string 'End_Additional_Job_Subcategory_ID'
     */
    const VALUE_END_ADDITIONAL_JOB_SUBCATEGORY_ID = 'End_Additional_Job_Subcategory_ID';
    /**
     * Constant for value 'Event_Classification_Subcategory_ID'
     * @return string 'Event_Classification_Subcategory_ID'
     */
    const VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID = 'Event_Classification_Subcategory_ID';
    /**
     * Constant for value 'General_Event_Subcategory_ID'
     * @return string 'General_Event_Subcategory_ID'
     */
    const VALUE_GENERAL_EVENT_SUBCATEGORY_ID = 'General_Event_Subcategory_ID';
    /**
     * Constant for value 'Leave_of_Absence_Type_ID'
     * @return string 'Leave_of_Absence_Type_ID'
     */
    const VALUE_LEAVE_OF_ABSENCE_TYPE_ID = 'Leave_of_Absence_Type_ID';
    /**
     * Constant for value 'Termination_Subcategory_ID'
     * @return string 'Termination_Subcategory_ID'
     */
    const VALUE_TERMINATION_SUBCATEGORY_ID = 'Termination_Subcategory_ID';
    /**
     * Constant for value 'Undo_Move_Subcategory_ID'
     * @return string 'Undo_Move_Subcategory_ID'
     */
    const VALUE_UNDO_MOVE_SUBCATEGORY_ID = 'Undo_Move_Subcategory_ID';
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
     * @uses self::VALUE_BENEFITS_EVENT_SUBCATEGORY_ID
     * @uses self::VALUE_CHANGE_JOB_SUBCATEGORY_ID
     * @uses self::VALUE_END_ADDITIONAL_JOB_SUBCATEGORY_ID
     * @uses self::VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID
     * @uses self::VALUE_GENERAL_EVENT_SUBCATEGORY_ID
     * @uses self::VALUE_LEAVE_OF_ABSENCE_TYPE_ID
     * @uses self::VALUE_TERMINATION_SUBCATEGORY_ID
     * @uses self::VALUE_UNDO_MOVE_SUBCATEGORY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BENEFITS_EVENT_SUBCATEGORY_ID,
            self::VALUE_CHANGE_JOB_SUBCATEGORY_ID,
            self::VALUE_END_ADDITIONAL_JOB_SUBCATEGORY_ID,
            self::VALUE_EVENT_CLASSIFICATION_SUBCATEGORY_ID,
            self::VALUE_GENERAL_EVENT_SUBCATEGORY_ID,
            self::VALUE_LEAVE_OF_ABSENCE_TYPE_ID,
            self::VALUE_TERMINATION_SUBCATEGORY_ID,
            self::VALUE_UNDO_MOVE_SUBCATEGORY_ID,
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
