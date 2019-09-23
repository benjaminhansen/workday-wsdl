<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Event_History_GetType StructType
 * Meta information extracted from the WSDL
 * - documentation: Utilize the following Reference element (and other optional attributes) to retrieve instances of Worker Events and their associated data.
 * @subpackage Structs
 */
class Worker_Event_History_GetType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * @var \StructType\Worker_ReferenceType
     */
    public $Worker_Reference;
    /**
     * The Event_Date_Range_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Effective_And_Updated_DateTime_DataType
     */
    public $Event_Date_Range_Data;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Worker_Event_History_GetType
     * @uses Worker_Event_History_GetType::setWorker_Reference()
     * @uses Worker_Event_History_GetType::setEvent_Date_Range_Data()
     * @uses Worker_Event_History_GetType::setVersion()
     * @param \StructType\Worker_ReferenceType $worker_Reference
     * @param \StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data
     * @param string $version
     */
    public function __construct(\StructType\Worker_ReferenceType $worker_Reference = null, \StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data = null, $version = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setEvent_Date_Range_Data($event_Date_Range_Data)
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
     * @return \StructType\Worker_Event_History_GetType
     */
    public function setWorker_Reference(\StructType\Worker_ReferenceType $worker_Reference = null)
    {
        $this->Worker_Reference = $worker_Reference;
        return $this;
    }
    /**
     * Get Event_Date_Range_Data value
     * @return \StructType\Effective_And_Updated_DateTime_DataType|null
     */
    public function getEvent_Date_Range_Data()
    {
        return $this->Event_Date_Range_Data;
    }
    /**
     * Set Event_Date_Range_Data value
     * @param \StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data
     * @return \StructType\Worker_Event_History_GetType
     */
    public function setEvent_Date_Range_Data(\StructType\Effective_And_Updated_DateTime_DataType $event_Date_Range_Data = null)
    {
        $this->Event_Date_Range_Data = $event_Date_Range_Data;
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
     * @return \StructType\Worker_Event_History_GetType
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
     * @return \StructType\Worker_Event_History_GetType
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
