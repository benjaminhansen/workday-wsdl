<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Management_Chain_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the worker's management chain for supervisory and matrix organizations.
 * @subpackage Structs
 */
class Worker_Management_Chain_DataType extends AbstractStructBase
{
    /**
     * The Worker_Supervisory_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Supervisory_Management_Chain_DataType
     */
    public $Worker_Supervisory_Management_Chain_Data;
    /**
     * The Worker_Matrix_Management_Chain_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Matrix_Management_Chain_DataType
     */
    public $Worker_Matrix_Management_Chain_Data;
    /**
     * Constructor method for Worker_Management_Chain_DataType
     * @uses Worker_Management_Chain_DataType::setWorker_Supervisory_Management_Chain_Data()
     * @uses Worker_Management_Chain_DataType::setWorker_Matrix_Management_Chain_Data()
     * @param \StructType\Worker_Supervisory_Management_Chain_DataType $worker_Supervisory_Management_Chain_Data
     * @param \StructType\Worker_Matrix_Management_Chain_DataType $worker_Matrix_Management_Chain_Data
     */
    public function __construct(\StructType\Worker_Supervisory_Management_Chain_DataType $worker_Supervisory_Management_Chain_Data = null, \StructType\Worker_Matrix_Management_Chain_DataType $worker_Matrix_Management_Chain_Data = null)
    {
        $this
            ->setWorker_Supervisory_Management_Chain_Data($worker_Supervisory_Management_Chain_Data)
            ->setWorker_Matrix_Management_Chain_Data($worker_Matrix_Management_Chain_Data);
    }
    /**
     * Get Worker_Supervisory_Management_Chain_Data value
     * @return \StructType\Worker_Supervisory_Management_Chain_DataType|null
     */
    public function getWorker_Supervisory_Management_Chain_Data()
    {
        return $this->Worker_Supervisory_Management_Chain_Data;
    }
    /**
     * Set Worker_Supervisory_Management_Chain_Data value
     * @param \StructType\Worker_Supervisory_Management_Chain_DataType $worker_Supervisory_Management_Chain_Data
     * @return \StructType\Worker_Management_Chain_DataType
     */
    public function setWorker_Supervisory_Management_Chain_Data(\StructType\Worker_Supervisory_Management_Chain_DataType $worker_Supervisory_Management_Chain_Data = null)
    {
        $this->Worker_Supervisory_Management_Chain_Data = $worker_Supervisory_Management_Chain_Data;
        return $this;
    }
    /**
     * Get Worker_Matrix_Management_Chain_Data value
     * @return \StructType\Worker_Matrix_Management_Chain_DataType|null
     */
    public function getWorker_Matrix_Management_Chain_Data()
    {
        return $this->Worker_Matrix_Management_Chain_Data;
    }
    /**
     * Set Worker_Matrix_Management_Chain_Data value
     * @param \StructType\Worker_Matrix_Management_Chain_DataType $worker_Matrix_Management_Chain_Data
     * @return \StructType\Worker_Management_Chain_DataType
     */
    public function setWorker_Matrix_Management_Chain_Data(\StructType\Worker_Matrix_Management_Chain_DataType $worker_Matrix_Management_Chain_Data = null)
    {
        $this->Worker_Matrix_Management_Chain_Data = $worker_Matrix_Management_Chain_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Management_Chain_DataType
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
