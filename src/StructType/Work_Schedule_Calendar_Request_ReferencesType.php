<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Work_Schedule_Calendar_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Work Schedule Calendar references.
 * @subpackage Structs
 */
class Work_Schedule_Calendar_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Work_Schedule_Calendar_Request_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference for Work Schedule Calendar.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[]
     */
    public $Work_Schedule_Calendar_Request_Reference;
    /**
     * Constructor method for Work_Schedule_Calendar_Request_ReferencesType
     * @uses Work_Schedule_Calendar_Request_ReferencesType::setWork_Schedule_Calendar_Request_Reference()
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[] $work_Schedule_Calendar_Request_Reference
     */
    public function __construct(array $work_Schedule_Calendar_Request_Reference = array())
    {
        $this
            ->setWork_Schedule_Calendar_Request_Reference($work_Schedule_Calendar_Request_Reference);
    }
    /**
     * Get Work_Schedule_Calendar_Request_Reference value
     * @return \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[]|null
     */
    public function getWork_Schedule_Calendar_Request_Reference()
    {
        return $this->Work_Schedule_Calendar_Request_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWork_Schedule_Calendar_Request_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWork_Schedule_Calendar_Request_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWork_Schedule_Calendar_Request_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Request_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem) {
            // validation for constraint: itemType
            if (!$work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem instanceof \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType) {
                $invalidValues[] = is_object($work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem) ? get_class($work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem) : sprintf('%s(%s)', gettype($work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem), var_export($work_Schedule_Calendar_Request_ReferencesTypeWork_Schedule_Calendar_Request_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Work_Schedule_Calendar_Request_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Work_Schedule_Calendar_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType[] $work_Schedule_Calendar_Request_Reference
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Request_ReferencesType
     */
    public function setWork_Schedule_Calendar_Request_Reference(array $work_Schedule_Calendar_Request_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($work_Schedule_Calendar_Request_ReferenceArrayErrorMessage = self::validateWork_Schedule_Calendar_Request_ReferenceForArrayConstraintsFromSetWork_Schedule_Calendar_Request_Reference($work_Schedule_Calendar_Request_Reference))) {
            throw new \InvalidArgumentException($work_Schedule_Calendar_Request_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Work_Schedule_Calendar_Request_Reference = $work_Schedule_Calendar_Request_Reference;
        return $this;
    }
    /**
     * Add item to Work_Schedule_Calendar_Request_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $item
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Request_ReferencesType
     */
    public function addToWork_Schedule_Calendar_Request_Reference(\WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType) {
            throw new \InvalidArgumentException(sprintf('The Work_Schedule_Calendar_Request_Reference property can only contain items of type \WorkdayWsdl\\StructType\Work_Schedule_CalendarObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Work_Schedule_Calendar_Request_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Work_Schedule_Calendar_Request_ReferencesType
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
