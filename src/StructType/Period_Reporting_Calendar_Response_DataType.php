<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period_Reporting_Calendar_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element for Get Period Reporting Calendars Web Service
 * @subpackage Structs
 */
class Period_Reporting_Calendar_Response_DataType extends AbstractStructBase
{
    /**
     * The Period_Reporting_Calendar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Period_Reporting_CalendarType[]
     */
    public $Period_Reporting_Calendar;
    /**
     * Constructor method for Period_Reporting_Calendar_Response_DataType
     * @uses Period_Reporting_Calendar_Response_DataType::setPeriod_Reporting_Calendar()
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarType[] $period_Reporting_Calendar
     */
    public function __construct(array $period_Reporting_Calendar = array())
    {
        $this
            ->setPeriod_Reporting_Calendar($period_Reporting_Calendar);
    }
    /**
     * Get Period_Reporting_Calendar value
     * @return \WorkdayWsdl\\StructType\Period_Reporting_CalendarType[]|null
     */
    public function getPeriod_Reporting_Calendar()
    {
        return $this->Period_Reporting_Calendar;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Reporting_Calendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Reporting_Calendar method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Reporting_CalendarForArrayConstraintsFromSetPeriod_Reporting_Calendar(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem) {
            // validation for constraint: itemType
            if (!$period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem instanceof \WorkdayWsdl\\StructType\Period_Reporting_CalendarType) {
                $invalidValues[] = is_object($period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem) ? get_class($period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem) : sprintf('%s(%s)', gettype($period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem), var_export($period_Reporting_Calendar_Response_DataTypePeriod_Reporting_CalendarItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Reporting_Calendar property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_CalendarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Reporting_Calendar value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarType[] $period_Reporting_Calendar
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Response_DataType
     */
    public function setPeriod_Reporting_Calendar(array $period_Reporting_Calendar = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Reporting_CalendarArrayErrorMessage = self::validatePeriod_Reporting_CalendarForArrayConstraintsFromSetPeriod_Reporting_Calendar($period_Reporting_Calendar))) {
            throw new \InvalidArgumentException($period_Reporting_CalendarArrayErrorMessage, __LINE__);
        }
        $this->Period_Reporting_Calendar = $period_Reporting_Calendar;
        return $this;
    }
    /**
     * Add item to Period_Reporting_Calendar value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Period_Reporting_CalendarType $item
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Response_DataType
     */
    public function addToPeriod_Reporting_Calendar(\WorkdayWsdl\\StructType\Period_Reporting_CalendarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Period_Reporting_CalendarType) {
            throw new \InvalidArgumentException(sprintf('The Period_Reporting_Calendar property can only contain items of type \WorkdayWsdl\\StructType\Period_Reporting_CalendarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Reporting_Calendar[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Period_Reporting_Calendar_Response_DataType
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
