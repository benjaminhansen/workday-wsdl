<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Holiday_Calendar_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Holiday Calendar references.
 * @subpackage Structs
 */
class Holiday_Calendar_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Holiday_Calendar_Request_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Holiday Calendar.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Holiday_CalendarObjectType[]
     */
    public $Holiday_Calendar_Request_Reference;
    /**
     * Constructor method for Holiday_Calendar_Request_ReferencesType
     * @uses Holiday_Calendar_Request_ReferencesType::setHoliday_Calendar_Request_Reference()
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType[] $holiday_Calendar_Request_Reference
     */
    public function __construct(array $holiday_Calendar_Request_Reference = array())
    {
        $this
            ->setHoliday_Calendar_Request_Reference($holiday_Calendar_Request_Reference);
    }
    /**
     * Get Holiday_Calendar_Request_Reference value
     * @return \WorkdayWsdl\\StructType\Holiday_CalendarObjectType[]|null
     */
    public function getHoliday_Calendar_Request_Reference()
    {
        return $this->Holiday_Calendar_Request_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setHoliday_Calendar_Request_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHoliday_Calendar_Request_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHoliday_Calendar_Request_ReferenceForArrayConstraintsFromSetHoliday_Calendar_Request_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem) {
            // validation for constraint: itemType
            if (!$holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem instanceof \WorkdayWsdl\\StructType\Holiday_CalendarObjectType) {
                $invalidValues[] = is_object($holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem) ? get_class($holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem) : sprintf('%s(%s)', gettype($holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem), var_export($holiday_Calendar_Request_ReferencesTypeHoliday_Calendar_Request_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Holiday_Calendar_Request_Reference property can only contain items of type \WorkdayWsdl\\StructType\Holiday_CalendarObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Holiday_Calendar_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType[] $holiday_Calendar_Request_Reference
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Request_ReferencesType
     */
    public function setHoliday_Calendar_Request_Reference(array $holiday_Calendar_Request_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($holiday_Calendar_Request_ReferenceArrayErrorMessage = self::validateHoliday_Calendar_Request_ReferenceForArrayConstraintsFromSetHoliday_Calendar_Request_Reference($holiday_Calendar_Request_Reference))) {
            throw new \InvalidArgumentException($holiday_Calendar_Request_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Holiday_Calendar_Request_Reference = $holiday_Calendar_Request_Reference;
        return $this;
    }
    /**
     * Add item to Holiday_Calendar_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Holiday_CalendarObjectType $item
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Request_ReferencesType
     */
    public function addToHoliday_Calendar_Request_Reference(\WorkdayWsdl\\StructType\Holiday_CalendarObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Holiday_CalendarObjectType) {
            throw new \InvalidArgumentException(sprintf('The Holiday_Calendar_Request_Reference property can only contain items of type \WorkdayWsdl\\StructType\Holiday_CalendarObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Holiday_Calendar_Request_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Holiday_Calendar_Request_ReferencesType
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
