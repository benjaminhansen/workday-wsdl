<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Holiday_Calendar_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Holiday Calendar Response.
 * @subpackage Structs
 */
class Put_Holiday_Calendar_ResponseType extends AbstractStructBase
{
    /**
     * The Holiday_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Holiday Calendar.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Holiday_CalendarObjectType
     */
    public $Holiday_Calendar_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Holiday_Calendar_ResponseType
     * @uses Put_Holiday_Calendar_ResponseType::setHoliday_Calendar_Reference()
     * @uses Put_Holiday_Calendar_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference = null, $version = null)
    {
        $this
            ->setHoliday_Calendar_Reference($holiday_Calendar_Reference)
            ->setVersion($version);
    }
    /**
     * Get Holiday_Calendar_Reference value
     * @return \WorkdayWsdl\\StructType\Holiday_CalendarObjectType|null
     */
    public function getHoliday_Calendar_Reference()
    {
        return $this->Holiday_Calendar_Reference;
    }
    /**
     * Set Holiday_Calendar_Reference value
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_ResponseType
     */
    public function setHoliday_Calendar_Reference(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference = null)
    {
        $this->Holiday_Calendar_Reference = $holiday_Calendar_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_ResponseType
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
