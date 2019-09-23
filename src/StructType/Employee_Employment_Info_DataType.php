<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Employee_Employment_Info_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containg all Employment data (e.g. Status, Position, Compensation, etc.) for an Employee.
 * @subpackage Structs
 */
class Employee_Employment_Info_DataType extends AbstractStructBase
{
    /**
     * The Worker_Status_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Status_DataType
     */
    public $Worker_Status_Data;
    /**
     * The Worker_Position_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Position_DataType
     */
    public $Worker_Position_Data;
    /**
     * The Compensation_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Compensation_DataType
     */
    public $Compensation_Data;
    /**
     * The Worker_Document_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Document_Data_WWSType
     */
    public $Worker_Document_Data;
    /**
     * Constructor method for Employee_Employment_Info_DataType
     * @uses Employee_Employment_Info_DataType::setWorker_Status_Data()
     * @uses Employee_Employment_Info_DataType::setWorker_Position_Data()
     * @uses Employee_Employment_Info_DataType::setCompensation_Data()
     * @uses Employee_Employment_Info_DataType::setWorker_Document_Data()
     * @param \StructType\Worker_Status_DataType $worker_Status_Data
     * @param \StructType\Worker_Position_DataType $worker_Position_Data
     * @param \StructType\Compensation_DataType $compensation_Data
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     */
    public function __construct(\StructType\Worker_Status_DataType $worker_Status_Data = null, \StructType\Worker_Position_DataType $worker_Position_Data = null, \StructType\Compensation_DataType $compensation_Data = null, \StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this
            ->setWorker_Status_Data($worker_Status_Data)
            ->setWorker_Position_Data($worker_Position_Data)
            ->setCompensation_Data($compensation_Data)
            ->setWorker_Document_Data($worker_Document_Data);
    }
    /**
     * Get Worker_Status_Data value
     * @return \StructType\Worker_Status_DataType|null
     */
    public function getWorker_Status_Data()
    {
        return $this->Worker_Status_Data;
    }
    /**
     * Set Worker_Status_Data value
     * @param \StructType\Worker_Status_DataType $worker_Status_Data
     * @return \StructType\Employee_Employment_Info_DataType
     */
    public function setWorker_Status_Data(\StructType\Worker_Status_DataType $worker_Status_Data = null)
    {
        $this->Worker_Status_Data = $worker_Status_Data;
        return $this;
    }
    /**
     * Get Worker_Position_Data value
     * @return \StructType\Worker_Position_DataType|null
     */
    public function getWorker_Position_Data()
    {
        return $this->Worker_Position_Data;
    }
    /**
     * Set Worker_Position_Data value
     * @param \StructType\Worker_Position_DataType $worker_Position_Data
     * @return \StructType\Employee_Employment_Info_DataType
     */
    public function setWorker_Position_Data(\StructType\Worker_Position_DataType $worker_Position_Data = null)
    {
        $this->Worker_Position_Data = $worker_Position_Data;
        return $this;
    }
    /**
     * Get Compensation_Data value
     * @return \StructType\Compensation_DataType|null
     */
    public function getCompensation_Data()
    {
        return $this->Compensation_Data;
    }
    /**
     * Set Compensation_Data value
     * @param \StructType\Compensation_DataType $compensation_Data
     * @return \StructType\Employee_Employment_Info_DataType
     */
    public function setCompensation_Data(\StructType\Compensation_DataType $compensation_Data = null)
    {
        $this->Compensation_Data = $compensation_Data;
        return $this;
    }
    /**
     * Get Worker_Document_Data value
     * @return \StructType\Worker_Document_Data_WWSType|null
     */
    public function getWorker_Document_Data()
    {
        return $this->Worker_Document_Data;
    }
    /**
     * Set Worker_Document_Data value
     * @param \StructType\Worker_Document_Data_WWSType $worker_Document_Data
     * @return \StructType\Employee_Employment_Info_DataType
     */
    public function setWorker_Document_Data(\StructType\Worker_Document_Data_WWSType $worker_Document_Data = null)
    {
        $this->Worker_Document_Data = $worker_Document_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Employee_Employment_Info_DataType
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
