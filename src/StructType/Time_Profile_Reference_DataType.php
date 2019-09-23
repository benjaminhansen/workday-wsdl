<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Time_Profile_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference element representing a unique instance of Time Profile.
 * @subpackage Structs
 */
class Time_Profile_Reference_DataType extends AbstractStructBase
{
    /**
     * The Time_Profile_Description
     * Meta information extracted from the WSDL
     * - documentation: A unique Time Profile needs to exist for the given Time Profile Description. | The time profile associated with the location. This ties to the time profile description that has been set up.
     * - maxOccurs: 1
     * @var string
     */
    public $Time_Profile_Description;
    /**
     * Constructor method for Time_Profile_Reference_DataType
     * @uses Time_Profile_Reference_DataType::setTime_Profile_Description()
     * @param string $time_Profile_Description
     */
    public function __construct($time_Profile_Description = null)
    {
        $this
            ->setTime_Profile_Description($time_Profile_Description);
    }
    /**
     * Get Time_Profile_Description value
     * @return string|null
     */
    public function getTime_Profile_Description()
    {
        return $this->Time_Profile_Description;
    }
    /**
     * Set Time_Profile_Description value
     * @param string $time_Profile_Description
     * @return \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType
     */
    public function setTime_Profile_Description($time_Profile_Description = null)
    {
        // validation for constraint: string
        if (!is_null($time_Profile_Description) && !is_string($time_Profile_Description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_Profile_Description, true), gettype($time_Profile_Description)), __LINE__);
        }
        $this->Time_Profile_Description = $time_Profile_Description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Time_Profile_Reference_DataType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
