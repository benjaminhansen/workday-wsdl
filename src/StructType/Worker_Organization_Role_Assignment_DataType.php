<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Organization_Role_Assignment_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the workers that fill the organization role.
 * @subpackage Structs
 */
class Worker_Organization_Role_Assignment_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier that can be used to reference a worker(s) that fills the organization role.
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Assignment_From
     * Meta information extracted from the WSDL
     * - documentation: The way the role was assigned to the worker. Valid values are: Assigned, Default, Inherited
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Assignment_From;
    /**
     * Constructor method for Worker_Organization_Role_Assignment_DataType
     * @uses Worker_Organization_Role_Assignment_DataType::setWorker_Reference()
     * @uses Worker_Organization_Role_Assignment_DataType::setAssignment_From()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param string $assignment_From
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, $assignment_From = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setAssignment_From($assignment_From);
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
     * @return \StructType\Worker_Organization_Role_Assignment_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Assignment_From value
     * @return string|null
     */
    public function getAssignment_From()
    {
        return $this->Assignment_From;
    }
    /**
     * Set Assignment_From value
     * @param string $assignment_From
     * @return \StructType\Worker_Organization_Role_Assignment_DataType
     */
    public function setAssignment_From($assignment_From = null)
    {
        // validation for constraint: string
        if (!is_null($assignment_From) && !is_string($assignment_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignment_From, true), gettype($assignment_From)), __LINE__);
        }
        $this->Assignment_From = $assignment_From;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Organization_Role_Assignment_DataType
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
