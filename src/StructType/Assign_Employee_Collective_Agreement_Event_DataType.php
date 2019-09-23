<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Employee_Collective_Agreement_Event_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Assign Employee Collective Agreement element that has the Worker data, Position data, effective date and also contains the Collective Agreement data
 * @subpackage Structs
 */
class Assign_Employee_Collective_Agreement_Event_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Worker for the Collective Agreement Event
     * - minOccurs: 0
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of the Assign Collective Agreement to the Worker
     * - maxOccurs: 1
     * @var string
     */
    public $Effective_Date;
    /**
     * The Collective_Agreement_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the Data relevant to the Collective agreement
     * @var \StructType\Assign_Employee_Collective_Agreement_DataType
     */
    public $Collective_Agreement_Data;
    /**
     * Constructor method for Assign_Employee_Collective_Agreement_Event_DataType
     * @uses Assign_Employee_Collective_Agreement_Event_DataType::setWorker_Reference()
     * @uses Assign_Employee_Collective_Agreement_Event_DataType::setEffective_Date()
     * @uses Assign_Employee_Collective_Agreement_Event_DataType::setCollective_Agreement_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param string $effective_Date
     * @param \StructType\Assign_Employee_Collective_Agreement_DataType $collective_Agreement_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, $effective_Date = null, \StructType\Assign_Employee_Collective_Agreement_DataType $collective_Agreement_Data = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setEffective_Date($effective_Date)
            ->setCollective_Agreement_Data($collective_Agreement_Data);
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
     * @return \StructType\Assign_Employee_Collective_Agreement_Event_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Assign_Employee_Collective_Agreement_Event_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Collective_Agreement_Data value
     * @return \StructType\Assign_Employee_Collective_Agreement_DataType|null
     */
    public function getCollective_Agreement_Data()
    {
        return $this->Collective_Agreement_Data;
    }
    /**
     * Set Collective_Agreement_Data value
     * @param \StructType\Assign_Employee_Collective_Agreement_DataType $collective_Agreement_Data
     * @return \StructType\Assign_Employee_Collective_Agreement_Event_DataType
     */
    public function setCollective_Agreement_Data(\StructType\Assign_Employee_Collective_Agreement_DataType $collective_Agreement_Data = null)
    {
        $this->Collective_Agreement_Data = $collective_Agreement_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Assign_Employee_Collective_Agreement_Event_DataType
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
