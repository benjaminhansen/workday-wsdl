<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Event_History_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing Worker Event History data.
 * @subpackage Structs
 */
class Worker_Event_History_DataType extends AbstractStructBase
{
    /**
     * The Event_Date_Range_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType
     */
    public $Event_Date_Range_Data;
    /**
     * The Event_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Event_History_DataType[]
     */
    public $Event_Data;
    /**
     * Constructor method for Worker_Event_History_DataType
     * @uses Worker_Event_History_DataType::setEvent_Date_Range_Data()
     * @uses Worker_Event_History_DataType::setEvent_Data()
     * @param \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data
     * @param \WorkdayWsdl\\StructType\Event_History_DataType[] $event_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data = null, array $event_Data = array())
    {
        $this
            ->setEvent_Date_Range_Data($event_Date_Range_Data)
            ->setEvent_Data($event_Data);
    }
    /**
     * Get Event_Date_Range_Data value
     * @return \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType|null
     */
    public function getEvent_Date_Range_Data()
    {
        return $this->Event_Date_Range_Data;
    }
    /**
     * Set Event_Date_Range_Data value
     * @param \WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data
     * @return \WorkdayWsdl\\StructType\Worker_Event_History_DataType
     */
    public function setEvent_Date_Range_Data(\WorkdayWsdl\\StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data = null)
    {
        $this->Event_Date_Range_Data = $event_Date_Range_Data;
        return $this;
    }
    /**
     * Get Event_Data value
     * @return \WorkdayWsdl\\StructType\Event_History_DataType[]|null
     */
    public function getEvent_Data()
    {
        return $this->Event_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setEvent_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvent_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEvent_DataForArrayConstraintsFromSetEvent_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_Event_History_DataTypeEvent_DataItem) {
            // validation for constraint: itemType
            if (!$worker_Event_History_DataTypeEvent_DataItem instanceof \WorkdayWsdl\\StructType\Event_History_DataType) {
                $invalidValues[] = is_object($worker_Event_History_DataTypeEvent_DataItem) ? get_class($worker_Event_History_DataTypeEvent_DataItem) : sprintf('%s(%s)', gettype($worker_Event_History_DataTypeEvent_DataItem), var_export($worker_Event_History_DataTypeEvent_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Event_History_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Event_History_DataType[] $event_Data
     * @return \WorkdayWsdl\\StructType\Worker_Event_History_DataType
     */
    public function setEvent_Data(array $event_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($event_DataArrayErrorMessage = self::validateEvent_DataForArrayConstraintsFromSetEvent_Data($event_Data))) {
            throw new \InvalidArgumentException($event_DataArrayErrorMessage, __LINE__);
        }
        $this->Event_Data = $event_Data;
        return $this;
    }
    /**
     * Add item to Event_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Event_History_DataType $item
     * @return \WorkdayWsdl\\StructType\Worker_Event_History_DataType
     */
    public function addToEvent_Data(\WorkdayWsdl\\StructType\Event_History_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Event_History_DataType) {
            throw new \InvalidArgumentException(sprintf('The Event_Data property can only contain items of type \WorkdayWsdl\\StructType\Event_History_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Event_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Event_History_DataType
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
