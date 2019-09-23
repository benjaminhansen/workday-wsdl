<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Response_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains each Worker based on the Request References or Request Criteria. The data returned is the current information as of the dates in the response filter, and does not include all historical information about the worker.
 * @subpackage Structs
 */
class Workers_Response_DataType extends AbstractStructBase
{
    /**
     * The Worker
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\WorkerType[]
     */
    public $Worker;
    /**
     * Constructor method for Workers_Response_DataType
     * @uses Workers_Response_DataType::setWorker()
     * @param \StructType\WorkerType[] $worker
     */
    public function __construct(array $worker = array())
    {
        $this
            ->setWorker($worker);
    }
    /**
     * Get Worker value
     * @return \StructType\WorkerType[]|null
     */
    public function getWorker()
    {
        return $this->Worker;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkerForArrayConstraintsFromSetWorker(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workers_Response_DataTypeWorkerItem) {
            // validation for constraint: itemType
            if (!$workers_Response_DataTypeWorkerItem instanceof \StructType\WorkerType) {
                $invalidValues[] = is_object($workers_Response_DataTypeWorkerItem) ? get_class($workers_Response_DataTypeWorkerItem) : sprintf('%s(%s)', gettype($workers_Response_DataTypeWorkerItem), var_export($workers_Response_DataTypeWorkerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker property can only contain items of type \StructType\WorkerType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerType[] $worker
     * @return \StructType\Workers_Response_DataType
     */
    public function setWorker(array $worker = array())
    {
        // validation for constraint: array
        if ('' !== ($workerArrayErrorMessage = self::validateWorkerForArrayConstraintsFromSetWorker($worker))) {
            throw new \InvalidArgumentException($workerArrayErrorMessage, __LINE__);
        }
        $this->Worker = $worker;
        return $this;
    }
    /**
     * Add item to Worker value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkerType $item
     * @return \StructType\Workers_Response_DataType
     */
    public function addToWorker(\StructType\WorkerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkerType) {
            throw new \InvalidArgumentException(sprintf('The Worker property can only contain items of type \StructType\WorkerType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workers_Response_DataType
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
