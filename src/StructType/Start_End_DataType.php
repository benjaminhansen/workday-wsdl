<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Start_End_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing date and times for the Calendar Event.
 * @subpackage Structs
 */
class Start_End_DataType extends AbstractStructBase
{
    /**
     * The All_Day_Event
     * Meta information extracted from the WSDL
     * - documentation: Boolean value for all day event for Calendar Event. If true, this event will occur all day. If false, this event will occur in the start to end date range.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $All_Day_Event;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Date value for the start time for Calendar Event.
     * - maxOccurs: 1
     * @var string
     */
    public $Start_Date;
    /**
     * The Start_Time_Reference
     * Meta information extracted from the WSDL
     * - documentation: Time reference for the start time for Calendar Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType
     */
    public $Start_Time_Reference;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: Date value for the End Time for Calendar Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The End_Time_Reference
     * Meta information extracted from the WSDL
     * - documentation: Time reference for the end time for Calendar Event.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType
     */
    public $End_Time_Reference;
    /**
     * Constructor method for Start_End_DataType
     * @uses Start_End_DataType::setAll_Day_Event()
     * @uses Start_End_DataType::setStart_Date()
     * @uses Start_End_DataType::setStart_Time_Reference()
     * @uses Start_End_DataType::setEnd_Date()
     * @uses Start_End_DataType::setEnd_Time_Reference()
     * @param bool $all_Day_Event
     * @param string $start_Date
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $start_Time_Reference
     * @param string $end_Date
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $end_Time_Reference
     */
    public function __construct($all_Day_Event = null, $start_Date = null, \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $start_Time_Reference = null, $end_Date = null, \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $end_Time_Reference = null)
    {
        $this
            ->setAll_Day_Event($all_Day_Event)
            ->setStart_Date($start_Date)
            ->setStart_Time_Reference($start_Time_Reference)
            ->setEnd_Date($end_Date)
            ->setEnd_Time_Reference($end_Time_Reference);
    }
    /**
     * Get All_Day_Event value
     * @return bool|null
     */
    public function getAll_Day_Event()
    {
        return $this->All_Day_Event;
    }
    /**
     * Set All_Day_Event value
     * @param bool $all_Day_Event
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public function setAll_Day_Event($all_Day_Event = null)
    {
        // validation for constraint: boolean
        if (!is_null($all_Day_Event) && !is_bool($all_Day_Event)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($all_Day_Event, true), gettype($all_Day_Event)), __LINE__);
        }
        $this->All_Day_Event = $all_Day_Event;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get Start_Time_Reference value
     * @return \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType|null
     */
    public function getStart_Time_Reference()
    {
        return $this->Start_Time_Reference;
    }
    /**
     * Set Start_Time_Reference value
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $start_Time_Reference
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public function setStart_Time_Reference(\WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $start_Time_Reference = null)
    {
        $this->Start_Time_Reference = $start_Time_Reference;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get End_Time_Reference value
     * @return \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType|null
     */
    public function getEnd_Time_Reference()
    {
        return $this->End_Time_Reference;
    }
    /**
     * Set End_Time_Reference value
     * @param \WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $end_Time_Reference
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
     */
    public function setEnd_Time_Reference(\WorkdayWsdl\\StructType\Twenty_Four_Hour_TimeObjectType $end_Time_Reference = null)
    {
        $this->End_Time_Reference = $end_Time_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Start_End_DataType
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
