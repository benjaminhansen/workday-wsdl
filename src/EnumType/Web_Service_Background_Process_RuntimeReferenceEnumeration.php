<?php

namespace WorkdayWsdl\\EnumType;

/**
 * This class stands for Web_Service_Background_Process_RuntimeReferenceEnumeration
 * EnumType
 * @subpackage Enumerations
 */
class Web_Service_Background_Process_RuntimeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Background_Process_Instance_ID'
     * @return string 'Background_Process_Instance_ID'
     */
    const VALUE_BACKGROUND_PROCESS_INSTANCE_ID = 'Background_Process_Instance_ID';
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
     * @uses self::VALUE_BACKGROUND_PROCESS_INSTANCE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_BACKGROUND_PROCESS_INSTANCE_ID,
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
