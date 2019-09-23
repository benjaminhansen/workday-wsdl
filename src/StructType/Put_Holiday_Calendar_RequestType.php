<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Holiday_Calendar_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Put Holiday Calendar
 * @subpackage Structs
 */
class Put_Holiday_Calendar_RequestType extends AbstractStructBase
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
     * - documentation: Wrapper containing data for Condition Rule.
     * @var \WorkdayWsdl\\StructType\Holiday_Calendar_DataType
     */
    public $Holiday_Calendar_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: Add Only Flag. Indicates that the service is an add only, not an update.
     * @var bool
     */
    public $Add_Only;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Holiday_Calendar_RequestType
     * @uses Put_Holiday_Calendar_RequestType::setHoliday_Calendar_Reference()
     * @uses Put_Holiday_Calendar_RequestType::setHoliday_Calendar_Data()
     * @uses Put_Holiday_Calendar_RequestType::setAdd_Only()
     * @uses Put_Holiday_Calendar_RequestType::setVersion()
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference
     * @param \WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $holiday_Calendar_Reference = null, \WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setHoliday_Calendar_Reference($holiday_Calendar_Reference)
            ->setHoliday_Calendar_Data($holiday_Calendar_Data)
            ->setAdd_Only($add_Only)
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
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_RequestType
     */
    public function setHoliday_Calendar_Data(\WorkdayWsdl\\StructType\Holiday_Calendar_DataType $holiday_Calendar_Data = null)
    {
        $this->Holiday_Calendar_Data = $holiday_Calendar_Data;
        return $this;
    }
    /**
     * Get Add_Only value
     * @return bool|null
     */
    public function getAdd_Only()
    {
        return $this->Add_Only;
    }
    /**
     * Set Add_Only value
     * @param bool $add_Only
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_RequestType
     */
    public function setAdd_Only($add_Only = null)
    {
        // validation for constraint: boolean
        if (!is_null($add_Only) && !is_bool($add_Only)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($add_Only, true), gettype($add_Only)), __LINE__);
        }
        $this->Add_Only = $add_Only;
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
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_RequestType
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
     * @return \WorkdayWsdl\\StructType\Put_Holiday_Calendar_RequestType
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
