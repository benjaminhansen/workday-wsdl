<?php

namespace EnumType;

/**
 * This class stands for Worker_DocumentReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Worker_DocumentReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'File_ID'
     * @return string 'File_ID'
     */
    const VALUE_FILE_ID = 'File_ID';
    /**
     * Constant for value 'Period_Activity_Assignment_Event_Attachment'
     * @return string 'Period_Activity_Assignment_Event_Attachment'
     */
    const VALUE_PERIOD_ACTIVITY_ASSIGNMENT_EVENT_ATTACHMENT = 'Period_Activity_Assignment_Event_Attachment';
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
     * @uses self::VALUE_FILE_ID
     * @uses self::VALUE_PERIOD_ACTIVITY_ASSIGNMENT_EVENT_ATTACHMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_FILE_ID,
            self::VALUE_PERIOD_ACTIVITY_ASSIGNMENT_EVENT_ATTACHMENT,
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
