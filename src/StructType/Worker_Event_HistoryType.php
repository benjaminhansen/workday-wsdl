<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Event_HistoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing an instance of Worker and his/her Worker Event History.
 * @subpackage Structs
 */
class Worker_Event_HistoryType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_ReferenceType
     */
    public $Worker_Reference;
    /**
     * The Worker_Event_History_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Worker_Event_History_DataType
     */
    public $Worker_Event_History_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Worker_Event_HistoryType
     * @uses Worker_Event_HistoryType::setWorker_Reference()
     * @uses Worker_Event_HistoryType::setWorker_Event_History_Data()
     * @uses Worker_Event_HistoryType::setVersion()
     * @param \StructType\Worker_ReferenceType $worker_Reference
     * @param \StructType\Worker_Event_History_DataType $worker_Event_History_Data
     * @param string $version
     */
    public function __construct(\StructType\Worker_ReferenceType $worker_Reference = null, \StructType\Worker_Event_History_DataType $worker_Event_History_Data = null, $version = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Event_History_Data($worker_Event_History_Data)
            ->setVersion($version);
    }
    /**
     * Get Worker_Reference value
     * @return \StructType\Worker_ReferenceType|null
     */
    public function getWorker_Reference()
    {
        return $this->Worker_Reference;
    }
    /**
     * Set Worker_Reference value
     * @param \StructType\Worker_ReferenceType $worker_Reference
     * @return \StructType\Worker_Event_HistoryType
     */
    public function setWorker_Reference(\StructType\Worker_ReferenceType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Worker_Event_History_Data value
     * @return \StructType\Worker_Event_History_DataType|null
     */
    public function getWorker_Event_History_Data()
    {
        return $this->Worker_Event_History_Data;
    }
    /**
     * Set Worker_Event_History_Data value
     * @param \StructType\Worker_Event_History_DataType $worker_Event_History_Data
     * @return \StructType\Worker_Event_HistoryType
     */
    public function setWorker_Event_History_Data(\StructType\Worker_Event_History_DataType $worker_Event_History_Data = null)
    {
        $this->Worker_Event_History_Data = $worker_Event_History_Data;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Worker_Event_HistoryType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Event_HistoryType
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
