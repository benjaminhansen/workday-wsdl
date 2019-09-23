<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Personal_Information_Business_Process_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: You cannot submit this request because another personal information change event is already in progress for this worker. | Wrapper element for the Change Personal Information business process web service.
 * @subpackage Structs
 */
class Change_Personal_Information_Business_Process_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Worker that the Personal Information will be applied to.
     * @var \WorkdayWsdl\\StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Personal_Information_Data
     * @var \WorkdayWsdl\\StructType\Change_Personal_Information_DataType
     */
    public $Personal_Information_Data;
    /**
     * Constructor method for Change_Personal_Information_Business_Process_DataType
     * @uses Change_Personal_Information_Business_Process_DataType::setWorker_Reference()
     * @uses Change_Personal_Information_Business_Process_DataType::setPersonal_Information_Data()
     * @param \WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference
     * @param \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null, \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setPersonal_Information_Data($personal_Information_Data);
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
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_Business_Process_DataType
     */
    public function setWorker_Reference(\WorkdayWsdl\\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Personal_Information_Data value
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_DataType|null
     */
    public function getPersonal_Information_Data()
    {
        return $this->Personal_Information_Data;
    }
    /**
     * Set Personal_Information_Data value
     * @param \WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_Business_Process_DataType
     */
    public function setPersonal_Information_Data(\WorkdayWsdl\\StructType\Change_Personal_Information_DataType $personal_Information_Data = null)
    {
        $this->Personal_Information_Data = $personal_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Change_Personal_Information_Business_Process_DataType
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
