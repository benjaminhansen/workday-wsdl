<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Event_History_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing Event History data.
 * @subpackage Structs
 */
class Event_History_DataType extends AbstractStructBase
{
    /**
     * The Event_ID
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Event ID.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Event_ID;
    /**
     * The Event_Type_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Business_Process_Type_Reference_DataType
     */
    public $Event_Type_Reference;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Event Description.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Completed_DateTime
     * Meta information extracted from the WSDL
     * - documentation: Date the event completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Completed_DateTime;
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Date the event was made effective (or completed if no Effective Date).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * Constructor method for Event_History_DataType
     * @uses Event_History_DataType::setEvent_ID()
     * @uses Event_History_DataType::setEvent_Type_Reference()
     * @uses Event_History_DataType::setDescription()
     * @uses Event_History_DataType::setCompleted_DateTime()
     * @uses Event_History_DataType::setEffective_Date()
     * @param string $event_ID
     * @param \StructType\Business_Process_Type_Reference_DataType $event_Type_Reference
     * @param string $description
     * @param string $completed_DateTime
     * @param string $effective_Date
     */
    public function __construct($event_ID = null, \StructType\Business_Process_Type_Reference_DataType $event_Type_Reference = null, $description = null, $completed_DateTime = null, $effective_Date = null)
    {
        $this
            ->setEvent_ID($event_ID)
            ->setEvent_Type_Reference($event_Type_Reference)
            ->setDescription($description)
            ->setCompleted_DateTime($completed_DateTime)
            ->setEffective_Date($effective_Date);
    }
    /**
     * Get Event_ID value
     * @return string|null
     */
    public function getEvent_ID()
    {
        return $this->Event_ID;
    }
    /**
     * Set Event_ID value
     * @param string $event_ID
     * @return \StructType\Event_History_DataType
     */
    public function setEvent_ID($event_ID = null)
    {
        // validation for constraint: string
        if (!is_null($event_ID) && !is_string($event_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event_ID, true), gettype($event_ID)), __LINE__);
        }
        $this->Event_ID = $event_ID;
        return $this;
    }
    /**
     * Get Event_Type_Reference value
     * @return \StructType\Business_Process_Type_Reference_DataType|null
     */
    public function getEvent_Type_Reference()
    {
        return $this->Event_Type_Reference;
    }
    /**
     * Set Event_Type_Reference value
     * @param \StructType\Business_Process_Type_Reference_DataType $event_Type_Reference
     * @return \StructType\Event_History_DataType
     */
    public function setEvent_Type_Reference(\StructType\Business_Process_Type_Reference_DataType $event_Type_Reference = null)
    {
        $this->Event_Type_Reference = $event_Type_Reference;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Event_History_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Completed_DateTime value
     * @return string|null
     */
    public function getCompleted_DateTime()
    {
        return $this->Completed_DateTime;
    }
    /**
     * Set Completed_DateTime value
     * @param string $completed_DateTime
     * @return \StructType\Event_History_DataType
     */
    public function setCompleted_DateTime($completed_DateTime = null)
    {
        // validation for constraint: string
        if (!is_null($completed_DateTime) && !is_string($completed_DateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completed_DateTime, true), gettype($completed_DateTime)), __LINE__);
        }
        $this->Completed_DateTime = $completed_DateTime;
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
     * @return \StructType\Event_History_DataType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Event_History_DataType
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
