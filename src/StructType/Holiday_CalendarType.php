<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Holiday_CalendarType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Holiday Calendar reference and data.
 * @subpackage Structs
 */
class Holiday_CalendarType extends AbstractStructBase
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
     * The Holiday_Calendar_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Holiday_Calendar_DataType
     */
    public $Holiday_Calendar_Data;
    /**
     * Constructor method for Holiday_CalendarType
     * @uses Holiday_CalendarType::setHoliday_Calendar_Reference()
     * @uses Holiday_CalendarType::setHoliday_Calendar_Data()
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference
     * @param \WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference = null, \WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data = null)
    {
        $this
            ->setHoliday_Calendar_Reference($holiday_Calendar_Reference)
            ->setHoliday_Calendar_Data($holiday_Calendar_Data);
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
     * @return \WorkdayWsdl\\StructType\Holiday_CalendarType
     */
    public function setHoliday_Calendar_Reference(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference = null)
    {
        $this->Holiday_Calendar_Reference = $holiday_Calendar_Reference;
        return $this;
    }
    /**
     * Get Holiday_Calendar_Data value
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_DataType|null
     */
    public function getHoliday_Calendar_Data()
    {
        return $this->Holiday_Calendar_Data;
    }
    /**
     * Set Holiday_Calendar_Data value
     * @param \WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data
     * @return \WorkdayWsdl\\StructType\Holiday_CalendarType
     */
    public function setHoliday_Calendar_Data(\WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data = null)
    {
        $this->Holiday_Calendar_Data = $holiday_Calendar_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Holiday_CalendarType
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
