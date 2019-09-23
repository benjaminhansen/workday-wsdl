<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_PhotoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Containing Worker Reference and Photo Data.
 * @subpackage Structs
 */
class Worker_PhotoType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Worker.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Worker_Photo_Data
     * Meta information extracted from the WSDL
     * - documentation: Element Containing Worker Reference and Photo Data.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Employee_Photo_DataType[]
     */
    public $Worker_Photo_Data;
    /**
     * Constructor method for Worker_PhotoType
     * @uses Worker_PhotoType::setWorker_Reference()
     * @uses Worker_PhotoType::setWorker_Photo_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\Employee_Photo_DataType[] $worker_Photo_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, array $worker_Photo_Data = array())
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Photo_Data($worker_Photo_Data);
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\WorkerObjectType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\WorkerObjectType $worker_Reference
     * @return \StructType\Worker_PhotoType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Worker_Photo_Data value
     * @return \StructType\Employee_Photo_DataType[]|null
     */
    public function getWorker_Photo_Data()
    {
        return $this->Worker_Photo_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorker_Photo_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorker_Photo_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorker_Photo_DataForArrayConstraintsFromSetWorker_Photo_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $worker_PhotoTypeWorker_Photo_DataItem) {
            // validation for constraint: itemType
            if (!$worker_PhotoTypeWorker_Photo_DataItem instanceof \StructType\Employee_Photo_DataType) {
                $invalidValues[] = is_object($worker_PhotoTypeWorker_Photo_DataItem) ? get_class($worker_PhotoTypeWorker_Photo_DataItem) : sprintf('%s(%s)', gettype($worker_PhotoTypeWorker_Photo_DataItem), var_export($worker_PhotoTypeWorker_Photo_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Worker_Photo_Data property can only contain items of type \StructType\Employee_Photo_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Worker_Photo_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Photo_DataType[] $worker_Photo_Data
     * @return \StructType\Worker_PhotoType
     */
    public function setWorker_Photo_Data(array $worker_Photo_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($worker_Photo_DataArrayErrorMessage = self::validateWorker_Photo_DataForArrayConstraintsFromSetWorker_Photo_Data($worker_Photo_Data))) {
            throw new \InvalidArgumentException($worker_Photo_DataArrayErrorMessage, __LINE__);
        }
        $this->Worker_Photo_Data = $worker_Photo_Data;
        return $this;
    }
    /**
     * Add item to Worker_Photo_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Employee_Photo_DataType $item
     * @return \StructType\Worker_PhotoType
     */
    public function addToWorker_Photo_Data(\StructType\Employee_Photo_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Employee_Photo_DataType) {
            throw new \InvalidArgumentException(sprintf('The Worker_Photo_Data property can only contain items of type \StructType\Employee_Photo_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Worker_Photo_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_PhotoType
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
