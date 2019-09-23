<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Period_Reporting_Calendar_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Element for Adding or Updating a Period Reporting Calendar
 * @subpackage Structs
 */
class Put_Period_Reporting_Calendar_RequestType extends AbstractStructBase
{
    /**
     * The Period_Reporting_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Existing Period Reporting Calendar to Update
     * - minOccurs: 0
     * @var \StructType\Period_Reporting_CalendarObjectType
     */
    public $Period_Reporting_Calendar_Reference;
    /**
     * The Period_Reporting_Calendar_Data
     * @var \StructType\Period_Reporting_Calendar_DataType
     */
    public $Period_Reporting_Calendar_Data;
    /**
     * The Add_Only
     * Meta information extracted from the WSDL
     * - documentation: If true, you're only allowed to add Period Reporting Calendars. No updates!
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
     * Constructor method for Put_Period_Reporting_Calendar_RequestType
     * @uses Put_Period_Reporting_Calendar_RequestType::setPeriod_Reporting_Calendar_Reference()
     * @uses Put_Period_Reporting_Calendar_RequestType::setPeriod_Reporting_Calendar_Data()
     * @uses Put_Period_Reporting_Calendar_RequestType::setAdd_Only()
     * @uses Put_Period_Reporting_Calendar_RequestType::setVersion()
     * @param \StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference
     * @param \StructType\Period_Reporting_Calendar_DataType $period_Reporting_Calendar_Data
     * @param bool $add_Only
     * @param string $version
     */
    public function __construct(\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null, \StructType\Period_Reporting_Calendar_DataType $period_Reporting_Calendar_Data = null, $add_Only = null, $version = null)
    {
        $this
            ->setPeriod_Reporting_Calendar_Reference($period_Reporting_Calendar_Reference)
            ->setPeriod_Reporting_Calendar_Data($period_Reporting_Calendar_Data)
            ->setAdd_Only($add_Only)
            ->setVersion($version);
    }
    /**
     * Get Period_Reporting_Calendar_Reference value
     * @return \StructType\Period_Reporting_CalendarObjectType|null
     */
    public function getPeriod_Reporting_Calendar_Reference()
    {
        return $this->Period_Reporting_Calendar_Reference;
    }
    /**
     * Set Period_Reporting_Calendar_Reference value
     * @param \StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference
     * @return \StructType\Put_Period_Reporting_Calendar_RequestType
     */
    public function setPeriod_Reporting_Calendar_Reference(\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null)
    {
        $this->Period_Reporting_Calendar_Reference = $period_Reporting_Calendar_Reference;
        return $this;
    }
    /**
     * Get Period_Reporting_Calendar_Data value
     * @return \StructType\Period_Reporting_Calendar_DataType|null
     */
    public function getPeriod_Reporting_Calendar_Data()
    {
        return $this->Period_Reporting_Calendar_Data;
    }
    /**
     * Set Period_Reporting_Calendar_Data value
     * @param \StructType\Period_Reporting_Calendar_DataType $period_Reporting_Calendar_Data
     * @return \StructType\Put_Period_Reporting_Calendar_RequestType
     */
    public function setPeriod_Reporting_Calendar_Data(\StructType\Period_Reporting_Calendar_DataType $period_Reporting_Calendar_Data = null)
    {
        $this->Period_Reporting_Calendar_Data = $period_Reporting_Calendar_Data;
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
     * @return \StructType\Put_Period_Reporting_Calendar_RequestType
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
     * @return \StructType\Put_Period_Reporting_Calendar_RequestType
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
     * @return \StructType\Put_Period_Reporting_Calendar_RequestType
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
