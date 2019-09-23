<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period_Reporting_CalendarType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper Element for Responding with Reporting Calendar Data
 * @subpackage Structs
 */
class Period_Reporting_CalendarType extends AbstractStructBase
{
    /**
     * The Period_Reporting_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Period Reporting Calendar
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType
     */
    public $Period_Reporting_Calendar_Reference;
    /**
     * The Period_Reporting_Calendar_Data
     * Meta information extracted from the WSDL
     * - documentation: Period Reporting Calendar Data element (Contains all the information about a period reporting calendar)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType[]
     */
    public $Period_Reporting_Calendar_Data;
    /**
     * Constructor method for Period_Reporting_CalendarType
     * @uses Period_Reporting_CalendarType::setPeriod_Reporting_Calendar_Reference()
     * @uses Period_Reporting_CalendarType::setPeriod_Reporting_Calendar_Data()
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType[] $period_Reporting_Calendar_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null, array $period_Reporting_Calendar_Data = array())
    {
        $this
            ->setPeriod_Reporting_Calendar_Reference($period_Reporting_Calendar_Reference)
            ->setPeriod_Reporting_Calendar_Data($period_Reporting_Calendar_Data);
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
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarType
     */
    public function setPeriod_Reporting_Calendar_Reference(\WorkdayWsdl\\StructType\Period_Reporting_CalendarObjectType $period_Reporting_Calendar_Reference = null)
    {
        $this->Period_Reporting_Calendar_Reference = $period_Reporting_Calendar_Reference;
        return $this;
    }
    /**
     * Get Period_Reporting_Calendar_Data value
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType[]|null
     */
    public function getPeriod_Reporting_Calendar_Data()
    {
        return $this->Period_Reporting_Calendar_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Reporting_Calendar_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Reporting_Calendar_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Reporting_Calendar_DataForArrayConstraintsFromSetPeriod_Reporting_Calendar_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem) {
            // validation for constraint: itemType
            if (!$period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem instanceof \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType) {
                $invalidValues[] = is_object($period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem) ? get_class($period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem) : sprintf('%s(%s)', gettype($period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem), var_export($period_Reporting_CalendarTypePeriod_Reporting_Calendar_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Reporting_Calendar_Data property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Reporting_Calendar_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType[] $period_Reporting_Calendar_Data
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarType
     */
    public function setPeriod_Reporting_Calendar_Data(array $period_Reporting_Calendar_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Reporting_Calendar_DataArrayErrorMessage = self::validatePeriod_Reporting_Calendar_DataForArrayConstraintsFromSetPeriod_Reporting_Calendar_Data($period_Reporting_Calendar_Data))) {
            throw new \InvalidArgumentException($period_Reporting_Calendar_DataArrayErrorMessage, __LINE__);
        }
        $this->Period_Reporting_Calendar_Data = $period_Reporting_Calendar_Data;
        return $this;
    }
    /**
     * Add item to Period_Reporting_Calendar_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType $item
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarType
     */
    public function addToPeriod_Reporting_Calendar_Data(\WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType) {
            throw new \InvalidArgumentException(sprintf('The Period_Reporting_Calendar_Data property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_Calendar_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Reporting_Calendar_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarType
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
