<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Worker_Photo_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains data for Adding/Updating a workers photo,
 * @subpackage Structs
 */
class Put_Worker_Photo_RequestType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Worker.
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Worker_Photo_Data
     * @var \StructType\Employee_Photo_DataType
     */
    public $Worker_Photo_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Worker_Photo_RequestType
     * @uses Put_Worker_Photo_RequestType::setWorker_Reference()
     * @uses Put_Worker_Photo_RequestType::setWorker_Photo_Data()
     * @uses Put_Worker_Photo_RequestType::setVersion()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param \StructType\Employee_Photo_DataType $worker_Photo_Data
     * @param string $version
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, \StructType\Employee_Photo_DataType $worker_Photo_Data = null, $version = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setWorker_Photo_Data($worker_Photo_Data)
            ->setVersion($version);
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
     * @return \StructType\Put_Worker_Photo_RequestType
     */
    public function setWorker_Reference(\StructType\WorkerObjectType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Worker_Photo_Data value
     * @return \StructType\Employee_Photo_DataType|null
     */
    public function getWorker_Photo_Data()
    {
        return $this->Worker_Photo_Data;
    }
    /**
     * Set Worker_Photo_Data value
     * @param \StructType\Employee_Photo_DataType $worker_Photo_Data
     * @return \StructType\Put_Worker_Photo_RequestType
     */
    public function setWorker_Photo_Data(\StructType\Employee_Photo_DataType $worker_Photo_Data = null)
    {
        $this->Worker_Photo_Data = $worker_Photo_Data;
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
     * @return \StructType\Put_Worker_Photo_RequestType
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
     * @return \StructType\Put_Worker_Photo_RequestType
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
