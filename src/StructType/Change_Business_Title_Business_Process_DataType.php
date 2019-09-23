<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Business_Title_Business_Process_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Job is required for workers with more than one position. | The job specified is not valid for the worker. | Wrapper element for the Change Business Title business process web service.
 * @subpackage Structs
 */
class Change_Business_Title_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: The worker you want to specify for the Change Business Title Web Service.
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Job_Reference
     * Meta information extracted from the WSDL
     * - documentation: The position of the worker you are changing the Business Title for. Required if the worker has more than one position.
     * - minOccurs: 0
     * @var \StructType\Position_ElementObjectType
     */
    public $Job_Reference;
    /**
     * The Change_Business_Title_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Change_Business_Title_DataType
     */
    public $Change_Business_Title_Data;
    /**
     * Constructor method for Change_Business_Title_Business_Process_DataType
     * @uses Change_Business_Title_Business_Process_DataType::setWorker_Reference()
     * @uses Change_Business_Title_Business_Process_DataType::setJob_Reference()
     * @uses Change_Business_Title_Business_Process_DataType::setChange_Business_Title_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\Position_ElementObjectType $job_Reference
     * @param \StructType\Change_Business_Title_DataType $change_Business_Title_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, \StructType\Position_ElementObjectType $job_Reference = null, \StructType\Change_Business_Title_DataType $change_Business_Title_Data = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setJob_Reference($job_Reference)
            ->setChange_Business_Title_Data($change_Business_Title_Data);
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
     * @return \StructType\Change_Business_Title_Business_Process_DataType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Job_Reference value
     * @return \StructType\Position_ElementObjectType|null
     */
    public function getJob_Reference()
    {
        return $this->Job_Reference;
    }
    /**
     * Set Job_Reference value
     * @param \StructType\Position_ElementObjectType $job_Reference
     * @return \StructType\Change_Business_Title_Business_Process_DataType
     */
    public function setJob_Reference(\StructType\Position_ElementObjectType $job_Reference = null)
    {
        $this->Job_Reference = $job_Reference;
        return $this;
    }
    /**
     * Get Change_Business_Title_Data value
     * @return \StructType\Change_Business_Title_DataType|null
     */
    public function getChange_Business_Title_Data()
    {
        return $this->Change_Business_Title_Data;
    }
    /**
     * Set Change_Business_Title_Data value
     * @param \StructType\Change_Business_Title_DataType $change_Business_Title_Data
     * @return \StructType\Change_Business_Title_Business_Process_DataType
     */
    public function setChange_Business_Title_Data(\StructType\Change_Business_Title_DataType $change_Business_Title_Data = null)
    {
        $this->Change_Business_Title_Data = $change_Business_Title_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Business_Title_Business_Process_DataType
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
