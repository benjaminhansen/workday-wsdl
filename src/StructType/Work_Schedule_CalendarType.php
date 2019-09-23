<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_CalendarType StructType
 * Meta information extracted from the WSDL
 * - documentation: Requested Work Schedule Calendar data.
 * @subpackage Structs
 */
class Work_Schedule_CalendarType extends AbstractStructBase
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
     * The Work_Schedule_Calendar_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType
     */
    public $Work_Schedule_Calendar_Data;
    /**
     * Constructor method for Work_Schedule_CalendarType
     * @uses Work_Schedule_CalendarType::setWork_Schedule_Calendar_Reference()
     * @uses Work_Schedule_CalendarType::setWork_Schedule_Calendar_Data()
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType $work_Schedule_Calendar_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference = null, \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType $work_Schedule_Calendar_Data = null)
    {
        $this
            ->setWork_Schedule_Calendar_Reference($work_Schedule_Calendar_Reference)
            ->setWork_Schedule_Calendar_Data($work_Schedule_Calendar_Data);
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
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarType
     */
    public function setWork_Schedule_Calendar_Reference(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $work_Schedule_Calendar_Reference = null)
    {
        $this->Work_Schedule_Calendar_Reference = $work_Schedule_Calendar_Reference;
        return $this;
    }
    /**
     * Get Work_Schedule_Calendar_Data value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType|null
     */
    public function getWork_Schedule_Calendar_Data()
    {
        return $this->Work_Schedule_Calendar_Data;
    }
    /**
     * Set Work_Schedule_Calendar_Data value
     * @param \WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType $work_Schedule_Calendar_Data
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarType
     */
    public function setWork_Schedule_Calendar_Data(\WorkdayWsdl\\StructType\Work_Schedule_Calendar_DataType $work_Schedule_Calendar_Data = null)
    {
        $this->Work_Schedule_Calendar_Data = $work_Schedule_Calendar_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarType
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
