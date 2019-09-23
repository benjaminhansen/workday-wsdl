<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contact_Information_for_Person_Event_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contact Information Events that change an Address must be done in order. To submit an event that changes an address with an earlier effective date you must rescind any Contact Information Events that change an address with a later
 * effective date. | You cannot initiate this action because there are other pending or completed actions for the worker that conflict with this one. | Wrapper element for the Maintain Contact Information for Person business process web service
 * @subpackage Structs
 */
class Contact_Information_for_Person_Event_DataType extends AbstractStructBase
{
    /**
     * The Worker_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for the worker.
     * @var \StructType\WorkerObjectType
     */
    public $Worker_Reference;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Date that the contact information change will be effective
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Worker_Contact_Information_Data
     * @var \StructType\Contact_Information_DataType
     */
    public $Worker_Contact_Information_Data;
    /**
     * Constructor method for Contact_Information_for_Person_Event_DataType
     * @uses Contact_Information_for_Person_Event_DataType::setWorker_Reference()
     * @uses Contact_Information_for_Person_Event_DataType::setEffective_Date()
     * @uses Contact_Information_for_Person_Event_DataType::setWorker_Contact_Information_Data()
     * @param \StructType\WorkerObjectType $worker_Reference
     * @param string $effective_Date
     * @param \StructType\Contact_Information_DataType $worker_Contact_Information_Data
     */
    public function __construct(\StructType\WorkerObjectType $worker_Reference = null, $effective_Date = null, \StructType\Contact_Information_DataType $worker_Contact_Information_Data = null)
    {
        $this
            ->setWorker_Reference($worker_Reference)
            ->setEffective_Date($effective_Date)
            ->setWorker_Contact_Information_Data($worker_Contact_Information_Data);
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
     * @return \StructType\Contact_Information_for_Person_Event_DataType
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
     * @return \StructType\Contact_Information_for_Person_Event_DataType
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
     * Get Worker_Contact_Information_Data value
     * @return \StructType\Contact_Information_DataType|null
     */
    public function getWorker_Contact_Information_Data()
    {
        return $this->Worker_Contact_Information_Data;
    }
    /**
     * Set Worker_Contact_Information_Data value
     * @param \StructType\Contact_Information_DataType $worker_Contact_Information_Data
     * @return \StructType\Contact_Information_for_Person_Event_DataType
     */
    public function setWorker_Contact_Information_Data(\StructType\Contact_Information_DataType $worker_Contact_Information_Data = null)
    {
        $this->Worker_Contact_Information_Data = $worker_Contact_Information_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Contact_Information_for_Person_Event_DataType
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
