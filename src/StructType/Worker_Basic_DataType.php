<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Basic_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Worker Reference and Name of the Worker
 * @subpackage Structs
 */
class Worker_Basic_DataType extends AbstractStructBase
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
     * The Worker_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: Worker name including person name and status and other information about the worker.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_Descriptor;
    /**
     * Constructor method for Worker_Basic_DataType
     * @uses Worker_Basic_DataType::setWorker_Reference()
     * @uses Worker_Basic_DataType::setWorker_Descriptor()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param string $worker_Descriptor
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, $worker_Descriptor = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Descriptor($worker_Descriptor);
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
     * @return \WorkdayWsdl\\StructType\Worker_Basic_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Worker_Descriptor value
     * @return string|null
     */
    public function getWorker_Descriptor()
    {
        return $this->Worker_Descriptor;
    }
    /**
     * Set Worker_Descriptor value
     * @param string $worker_Descriptor
     * @return \WorkdayWsdl\\StructType\Worker_Basic_DataType
     */
    public function setWorker_Descriptor($worker_Descriptor = null)
    {
        // validation for constraint: string
        if (!is_null($worker_Descriptor) && !is_string($worker_Descriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worker_Descriptor, true), gettype($worker_Descriptor)), __LINE__);
        }
        $this->Worker_Descriptor = $worker_Descriptor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Worker_Basic_DataType
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
