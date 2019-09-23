<?php

namespace EnumType;

/**
 * This class stands for Service_Center_RepresentativeReferenceEnumeration EnumType
 * @subpackage Enumerations
 */
class Service_Center_RepresentativeReferenceEnumeration
{
    /**
     * Constant for value 'WID'
     * @return string 'WID'
     */
    const VALUE_WID = 'WID';
    /**
     * Constant for value 'Service_Center_Representative_ID'
     * @return string 'Service_Center_Representative_ID'
     */
    const VALUE_SERVICE_CENTER_REPRESENTATIVE_ID = 'Service_Center_Representative_ID';
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
     * @uses self::VALUE_SERVICE_CENTER_REPRESENTATIVE_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WID,
            self::VALUE_SERVICE_CENTER_REPRESENTATIVE_ID,
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
