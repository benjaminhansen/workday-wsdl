<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Event_Target_Transaction_Log_Entry_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all transaction log entries.
 * @subpackage Structs
 */
class Event_Target_Transaction_Log_Entry_DataType extends AbstractStructBase
{
    /**
     * The Transaction_Log_Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Transaction_Log_EntryType[]
     */
    public $Transaction_Log_Entry;
    /**
     * Constructor method for Event_Target_Transaction_Log_Entry_DataType
     * @uses Event_Target_Transaction_Log_Entry_DataType::setTransaction_Log_Entry()
     * @param \WorkdayWsdl\\StructType\Transaction_Log_EntryType[] $transaction_Log_Entry
     */
    public function __construct(array $transaction_Log_Entry = array())
    {
        $this
            ->setTransaction_Log_Entry($transaction_Log_Entry);
    }
    /**
     * Get Transaction_Log_Entry value
     * @return \WorkdayWsdl\\StructType\Transaction_Log_EntryType[]|null
     */
    public function getTransaction_Log_Entry()
    {
        return $this->Transaction_Log_Entry;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction_Log_Entry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction_Log_Entry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransaction_Log_EntryForArrayConstraintsFromSetTransaction_Log_Entry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem) {
            // validation for constraint: itemType
            if (!$event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem instanceof \WorkdayWsdl\\StructType\Transaction_Log_EntryType) {
                $invalidValues[] = is_object($event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem) ? get_class($event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem) : sprintf('%s(%s)', gettype($event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem), var_export($event_Target_Transaction_Log_Entry_DataTypeTransaction_Log_EntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction_Log_Entry property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_EntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction_Log_Entry value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_EntryType[] $transaction_Log_Entry
     * @return \WorkdayWsdl\\StructType\Event_Target_Transaction_Log_Entry_DataType
     */
    public function setTransaction_Log_Entry(array $transaction_Log_Entry = array())
    {
        // validation for constraint: array
        if ('' !== ($transaction_Log_EntryArrayErrorMessage = self::validateTransaction_Log_EntryForArrayConstraintsFromSetTransaction_Log_Entry($transaction_Log_Entry))) {
            throw new \InvalidArgumentException($transaction_Log_EntryArrayErrorMessage, __LINE__);
        }
        $this->Transaction_Log_Entry = $transaction_Log_Entry;
        return $this;
    }
    /**
     * Add item to Transaction_Log_Entry value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Transaction_Log_EntryType $item
     * @return \WorkdayWsdl\\StructType\Event_Target_Transaction_Log_Entry_DataType
     */
    public function addToTransaction_Log_Entry(\WorkdayWsdl\\StructType\Transaction_Log_EntryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Transaction_Log_EntryType) {
            throw new \InvalidArgumentException(sprintf('The Transaction_Log_Entry property can only contain items of type \WorkdayWsdl\\StructType\Transaction_Log_EntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction_Log_Entry[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Event_Target_Transaction_Log_Entry_DataType
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
