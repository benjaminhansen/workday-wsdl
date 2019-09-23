<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Start_End_Minute_Support_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element containing date and times for the Calendar Event.
 * @subpackage Structs
 */
class Start_End_Minute_Support_DataType extends AbstractStructBase
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
     * The Start_Time
     * Meta information extracted from the WSDL
     * - documentation: Time value for the start time for Calendar Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Time;
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
     * The End_Time
     * Meta information extracted from the WSDL
     * - documentation: Time value for the end time for Calendar Event.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Time;
    /**
     * Constructor method for Start_End_Minute_Support_DataType
     * @uses Start_End_Minute_Support_DataType::setAll_Day_Event()
     * @uses Start_End_Minute_Support_DataType::setStart_Date()
     * @uses Start_End_Minute_Support_DataType::setStart_Time()
     * @uses Start_End_Minute_Support_DataType::setEnd_Date()
     * @uses Start_End_Minute_Support_DataType::setEnd_Time()
     * @param bool $all_Day_Event
     * @param string $start_Date
     * @param string $start_Time
     * @param string $end_Date
     * @param string $end_Time
     */
    public function __construct($all_Day_Event = null, $start_Date = null, $start_Time = null, $end_Date = null, $end_Time = null)
    {
        $this
            ->setAll_Day_Event($all_Day_Event)
            ->setStart_Date($start_Date)
            ->setStart_Time($start_Time)
            ->setEnd_Date($end_Date)
            ->setEnd_Time($end_Time);
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
     * @return \StructType\Start_End_Minute_Support_DataType
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
     * @return \StructType\Start_End_Minute_Support_DataType
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
     * Get Start_Time value
     * @return string|null
     */
    public function getStart_Time()
    {
        return $this->Start_Time;
    }
    /**
     * Set Start_Time value
     * @param string $start_Time
     * @return \StructType\Start_End_Minute_Support_DataType
     */
    public function setStart_Time($start_Time = null)
    {
        // validation for constraint: string
        if (!is_null($start_Time) && !is_string($start_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Time, true), gettype($start_Time)), __LINE__);
        }
        $this->Start_Time = $start_Time;
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
     * @return \StructType\Start_End_Minute_Support_DataType
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
     * Get End_Time value
     * @return string|null
     */
    public function getEnd_Time()
    {
        return $this->End_Time;
    }
    /**
     * Set End_Time value
     * @param string $end_Time
     * @return \StructType\Start_End_Minute_Support_DataType
     */
    public function setEnd_Time($end_Time = null)
    {
        // validation for constraint: string
        if (!is_null($end_Time) && !is_string($end_Time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Time, true), gettype($end_Time)), __LINE__);
        }
        $this->End_Time = $end_Time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Start_End_Minute_Support_DataType
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
