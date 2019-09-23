<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Transaction_Log_TypeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Transaction_Log_TypeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Business_Process_Type'
     * @return string 'Business_Process_Type'
     */
    const VALUE_BUSINESS_PROCESS_TYPE = 'Business_Process_Type';
    /**
     * Constant for value 'Event_Lite_Type_ID'
     * @return string 'Event_Lite_Type_ID'
     */
    const VALUE_EVENT_LITE_TYPE_ID = 'Event_Lite_Type_ID';
    /**
     * Constant for value 'Reorganization_Activity_Type'
     * @return string 'Reorganization_Activity_Type'
     */
    const VALUE_REORGANIZATION_ACTIVITY_TYPE = 'Reorganization_Activity_Type';
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
     * @uses self::VALUE_BUSINESS_PROCESS_TYPE
     * @uses self::VALUE_EVENT_LITE_TYPE_ID
     * @uses self::VALUE_REORGANIZATION_ACTIVITY_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BUSINESS_PROCESS_TYPE,
            self::VALUE_EVENT_LITE_TYPE_ID,
            self::VALUE_REORGANIZATION_ACTIVITY_TYPE,
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
