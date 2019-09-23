<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Previous_System_Job_History_Get_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for a Worker and the Previous System Job History data.
 * @subpackage Structs
 */
class Previous_System_Job_History_Get_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the worker. The ID consists of a type attribute, which should be set to "Employee_ID" or "Contingent_Worker_ID", and a value attribute, such as "04345". If Skip Non Existing Instances value is set to true.
     * When a reference id value that does not meet the entry date criteria is passed, the non existent reference id will be ignored.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Previous_System_Job_History_Data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType[]
     */
    public $Previous_System_Job_History_Data;
    /**
     * Constructor method for Previous_System_Job_History_Get_DataType
     * @uses Previous_System_Job_History_Get_DataType::setWorker_Reference()
     * @uses Previous_System_Job_History_Get_DataType::setPrevious_System_Job_History_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType[] $previous_System_Job_History_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, array $previous_System_Job_History_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setPrevious_System_Job_History_Data($previous_System_Job_History_Data);
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
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_History_Get_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Previous_System_Job_History_Data value
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType[]|null
     */
    public function getPrevious_System_Job_History_Data()
    {
        return $this->Previous_System_Job_History_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setPrevious_System_Job_History_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrevious_System_Job_History_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrevious_System_Job_History_DataForArrayConstraintsFromSetPrevious_System_Job_History_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem) {
            // validation for constraint: itemType
            if (!$previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem instanceof \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType) {
                $invalidValues[] = is_object($previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem) ? get_class($previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem) : sprintf('%s(%s)', gettype($previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem), var_export($previous_System_Job_History_Get_DataTypePrevious_System_Job_History_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Previous_System_Job_History_Data property can only contain items of type \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Previous_System_Job_History_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType[] $previous_System_Job_History_Data
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_History_Get_DataType
     */
    public function setPrevious_System_Job_History_Data(array $previous_System_Job_History_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($previous_System_Job_History_DataArrayErrorMessage = self::validatePrevious_System_Job_History_DataForArrayConstraintsFromSetPrevious_System_Job_History_Data($previous_System_Job_History_Data))) {
            throw new \InvalidArgumentException($previous_System_Job_History_DataArrayErrorMessage, __LINE__);
        }
        $this->Previous_System_Job_History_Data = $previous_System_Job_History_Data;
        return $this;
    }
    /**
     * Add item to Previous_System_Job_History_Data value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType $item
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_History_Get_DataType
     */
    public function addToPrevious_System_Job_History_Data(\WorkdayWsdl\\StructType\Previous_System_Job_HistoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType) {
            throw new \InvalidArgumentException(sprintf('The Previous_System_Job_History_Data property can only contain items of type \WorkdayWsdl\\StructType\Previous_System_Job_HistoryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Previous_System_Job_History_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Previous_System_Job_History_Get_DataType
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
