<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Period_Reporting_Calendar_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response of Put Period Reporting Calendar
 * @subpackage Structs
 */
class Put_Period_Reporting_Calendar_ResponseType extends AbstractStructBase
{
    /**
     * The Period_Reporting_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Updated/Created Period Reporting Calendar instance
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType
     */
    public $Period_Reporting_Calendar_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Period_Reporting_Calendar_ResponseType
     * @uses Put_Period_Reporting_Calendar_ResponseType::setPeriod_Reporting_Calendar_Reference()
     * @uses Put_Period_Reporting_Calendar_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null, $version = null)
    {
        $this
            ->setPeriod_Reporting_Calendar_Reference($period_Reporting_Calendar_Reference)
            ->setVersion($version);
    }
    /**
     * Get Period_Reporting_Calendar_Reference value
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType|null
     */
    public function getPeriod_Reporting_Calendar_Reference()
    {
        return $this->Period_Reporting_Calendar_Reference;
    }
    /**
     * Set Period_Reporting_Calendar_Reference value
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference
     * @return \WorkdayWsdl\\StructType\Put_Period_Reporting_Calendar_ResponseType
     */
    public function setPeriod_Reporting_Calendar_Reference(\WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null)
    {
        $this->Period_Reporting_Calendar_Reference = $period_Reporting_Calendar_Reference;
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
     * @return \WorkdayWsdl\\StructType\Put_Period_Reporting_Calendar_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Put_Period_Reporting_Calendar_ResponseType
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
