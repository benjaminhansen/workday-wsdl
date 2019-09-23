<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Work_Schedule_Calendar_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Work Schedule Calendar response.
 * @subpackage Structs
 */
class Put_Work_Schedule_Calendar_ResponseType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType
     */
    public $Work_Schedule_Calendar_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Work_Schedule_Calendar_ResponseType
     * @uses Put_Work_Schedule_Calendar_ResponseType::setWork_Schedule_Calendar_Reference()
     * @uses Put_Work_Schedule_Calendar_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference = null, $version = null)
    {
        $this
            ->setWork_Schedule_Calendar_Reference($work_Schedule_Calendar_Reference)
            ->setVersion($version);
    }
    /**
     * Get Work_Schedule_Calendar_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType|null
     */
    public function getWork_Schedule_Calendar_Reference()
    {
        return $this->Work_Schedule_Calendar_Reference;
    }
    /**
     * Set Work_Schedule_Calendar_Reference value
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference
     * @return \WorkdayWsdl\\StructType\Put_Work_Schedule_Calendar_ResponseType
     */
    public function setWork_Schedule_Calendar_Reference(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference = null)
    {
        $this->Work_Schedule_Calendar_Reference = $work_Schedule_Calendar_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Schedule_Calendar_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Work_Schedule_Calendar_ResponseType
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
