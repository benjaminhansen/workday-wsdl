<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Worker Profile data.
 * @subpackage Structs
 */
class WorkerType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the ID of the worker. The ID consists of a type attribute, which should be set to "Employee_ID" or "Contingent_Worker_ID", and a value attribute, such as "04345". If Skip Non Existing Instances value is set to true.
     * When a reference id value that does not meet the entry date criteria is passed, the non existent reference id will be ignored.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Worker_Descriptor
     * Meta information extracted from the WSDL
     * - documentation: The Worker's Person Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Worker_Descriptor;
    /**
     * The Universal_Identifier_Reference
     * Meta information extracted from the WSDL
     * - documentation: Universal ID for the worker.
     * - minOccurs: 0
     * @var \StructType\Universal_IdentifierObjectType
     */
    public $Universal_Identifier_Reference;
    /**
     * The Worker_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_DataType
     */
    public $Worker_Data;
    /**
     * Constructor method for WorkerType
     * @uses WorkerType::setWorker_Reference()
     * @uses WorkerType::setWorker_Descriptor()
     * @uses WorkerType::setUniversal_Identifier_Reference()
     * @uses WorkerType::setWorker_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param string $worker_Descriptor
     * @param \StructType\Universal_IdentifierObjectType $universal_Identifier_Reference
     * @param \StructType\Worker_DataType $worker_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, $worker_Descriptor = null, \StructType\Universal_IdentifierObjectType $universal_Identifier_Reference = null, \StructType\Worker_DataType $worker_Data = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Descriptor($worker_Descriptor)
            ->setUniversal_Identifier_Reference($universal_Identifier_Reference)
            ->setWorker_Data($worker_Data);
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
     * @return \StructType\WorkerType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
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
     * @return \StructType\WorkerType
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
     * Get Universal_Identifier_Reference value
     * @return \StructType\Universal_IdentifierObjectType|null
     */
    public function getUniversal_Identifier_Reference()
    {
        return $this->Universal_Identifier_Reference;
    }
    /**
     * Set Universal_Identifier_Reference value
     * @param \StructType\Universal_IdentifierObjectType $universal_Identifier_Reference
     * @return \StructType\WorkerType
     */
    public function setUniversal_Identifier_Reference(\StructType\Universal_IdentifierObjectType $universal_Identifier_Reference = null)
    {
        $this->Universal_Identifier_Reference = $universal_Identifier_Reference;
        return $this;
    }
    /**
     * Get Worker_Data value
     * @return \StructType\Worker_DataType|null
     */
    public function getWorker_Data()
    {
        return $this->Worker_Data;
    }
    /**
     * Set Worker_Data value
     * @param \StructType\Worker_DataType $worker_Data
     * @return \StructType\WorkerType
     */
    public function setWorker_Data(\StructType\Worker_DataType $worker_Data = null)
    {
        $this->Worker_Data = $worker_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkerType
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
