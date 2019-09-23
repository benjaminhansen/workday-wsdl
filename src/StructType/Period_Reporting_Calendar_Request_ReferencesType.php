<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Period_Reporting_Calendar_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request References Element for Get Period Reporting Calendars Web Service
 * @subpackage Structs
 */
class Period_Reporting_Calendar_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Period_Reporting_Calendar_Reference
     * Meta information extracted from the WSDL
     * - documentation: Period Reporting Calendars being requested
     * - maxOccurs: unbounded
     * @var \StructType\Period_Reporting_CalendarObjectType[]
     */
    public $Period_Reporting_Calendar_Reference;
    /**
     * Constructor method for Period_Reporting_Calendar_Request_ReferencesType
     * @uses Period_Reporting_Calendar_Request_ReferencesType::setPeriod_Reporting_Calendar_Reference()
     * @param \StructType\Period_Reporting_CalendarObjectType[] $period_Reporting_Calendar_Reference
     */
    public function __construct(array $period_Reporting_Calendar_Reference = array())
    {
        $this
            ->setPeriod_Reporting_Calendar_Reference($period_Reporting_Calendar_Reference);
    }
    /**
     * Get Period_Reporting_Calendar_Reference value
     * @return \StructType\Period_Reporting_CalendarObjectType[]|null
     */
    public function getPeriod_Reporting_Calendar_Reference()
    {
        return $this->Period_Reporting_Calendar_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod_Reporting_Calendar_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod_Reporting_Calendar_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriod_Reporting_Calendar_ReferenceForArrayConstraintsFromSetPeriod_Reporting_Calendar_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem) {
            // validation for constraint: itemType
            if (!$period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem instanceof \StructType\Period_Reporting_CalendarObjectType) {
                $invalidValues[] = is_object($period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem) ? get_class($period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem) : sprintf('%s(%s)', gettype($period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem), var_export($period_Reporting_Calendar_Request_ReferencesTypePeriod_Reporting_Calendar_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period_Reporting_Calendar_Reference property can only contain items of type \StructType\Period_Reporting_CalendarObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Period_Reporting_Calendar_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Period_Reporting_CalendarObjectType[] $period_Reporting_Calendar_Reference
     * @return \StructType\Period_Reporting_Calendar_Request_ReferencesType
     */
    public function setPeriod_Reporting_Calendar_Reference(array $period_Reporting_Calendar_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($period_Reporting_Calendar_ReferenceArrayErrorMessage = self::validatePeriod_Reporting_Calendar_ReferenceForArrayConstraintsFromSetPeriod_Reporting_Calendar_Reference($period_Reporting_Calendar_Reference))) {
            throw new \InvalidArgumentException($period_Reporting_Calendar_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Period_Reporting_Calendar_Reference = $period_Reporting_Calendar_Reference;
        return $this;
    }
    /**
     * Add item to Period_Reporting_Calendar_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Period_Reporting_CalendarObjectType $item
     * @return \StructType\Period_Reporting_Calendar_Request_ReferencesType
     */
    public function addToPeriod_Reporting_Calendar_Reference(\StructType\Period_Reporting_CalendarObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Period_Reporting_CalendarObjectType) {
            throw new \InvalidArgumentException(sprintf('The Period_Reporting_Calendar_Reference property can only contain items of type \StructType\Period_Reporting_CalendarObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Period_Reporting_Calendar_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Period_Reporting_Calendar_Request_ReferencesType
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
