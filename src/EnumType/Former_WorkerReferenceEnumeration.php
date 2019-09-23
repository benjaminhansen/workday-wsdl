<?php

namespace EnumType;

/**
 * This class stands for Former_WorkerReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Former_WorkerReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Former_Worker_ID'
     * @return string 'Former_Worker_ID'
     */
    const VALUE_FORMER_WORKER_ID = 'Former_Worker_ID';
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
     * @uses self::VALUE_FORMER_WORKER_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_FORMER_WORKER_ID,
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
