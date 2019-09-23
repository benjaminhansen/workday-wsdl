<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Previous_System_Job_HistoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the Data for adding, updating or deleting a previous system job history entry for a worker.
 * @subpackage Structs
 */
class Previous_System_Job_HistoryType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier for a worker (Employee or Contingent Worker).
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Previous_System_Job_History
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType[]
     */
    public $Previous_System_Job_History;
    /**
     * Constructor method for Previous_System_Job_HistoryType
     * @uses Previous_System_Job_HistoryType::setWorker_Reference()
     * @uses Previous_System_Job_HistoryType::setPrevious_System_Job_History()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType[] $previous_System_Job_History
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, array $previous_System_Job_History = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setPrevious_System_Job_History($previous_System_Job_History);
    }
    /**
     * Get Worker_Reference value
     * @return \WorkdayWsdl\\StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Previous_System_Job_History value
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType[]|null
     */
    public function getPrevious_System_Job_History()
    {
        return $this->Previous_System_Job_History;
    }
    /**
     * This method is responsible for validating the values passed to the setPrevious_System_Job_History method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrevious_System_Job_History method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrevious_System_Job_HistoryForArrayConstraintsFromSetPrevious_System_Job_History(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem) {
            // validation for constraint: itemType
            if (!$previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem instanceof \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType) {
                $invalidValues[] = is_object($previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem) ? get_class($previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem) : sprintf('%s(%s)', gettype($previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem), var_export($previous_System_Job_HistoryTypePrevious_System_Job_HistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Previous_System_Job_History property can only contain items of type \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Previous_System_Job_History value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType[] $previous_System_Job_History
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType
     */
    public function setPrevious_System_Job_History(array $previous_System_Job_History = array())
    {
        // validation for constraint: array
        if ('' !== ($previous_System_Job_HistoryArrayErrorMessage = self::validatePrevious_System_Job_HistoryForArrayConstraintsFromSetPrevious_System_Job_History($previous_System_Job_History))) {
            throw new \InvalidArgumentException($previous_System_Job_HistoryArrayErrorMessage, __LINE__);
        }
        $this->Previous_System_Job_History = $previous_System_Job_History;
        return $this;
    }
    /**
     * Add item to Previous_System_Job_History value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType $item
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType
     */
    public function addToPrevious_System_Job_History(\WorkdayWsdl\\StructType\Previous_System_Job_History_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType) {
            throw new \InvalidArgumentException(sprintf('The Previous_System_Job_History property can only contain items of type \WorkdayWsdl\\StructType\Previous_System_Job_History_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Previous_System_Job_History[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType
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
