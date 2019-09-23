<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element reports Pay Group Assignment rescind events.
 * @subpackage Structs
 */
class Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date of the original Assign Pay Group Event
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Completed_On
     * Meta information extracted from the WSDL
     * - documentation: Completed Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Completed_On;
    /**
     * The Event_Corrected
     * Meta information extracted from the WSDL
     * - documentation: Pay Group Assignment Corrected?
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Event_Corrected;
    /**
     * The Event_Rescinded
     * Meta information extracted from the WSDL
     * - documentation: Pay Group Assignment Rescinded?
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Event_Rescinded;
    /**
     * The Original_Pay_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: The original Pay Group that the Employee belonged to prior the Pay Group Assignment.
     * - minOccurs: 0
     * @var \StructType\Pay_GroupObjectType
     */
    public $Original_Pay_Group_Reference;
    /**
     * The Proposed_Pay_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Pay Group to which the Employee was to be assigned.
     * - minOccurs: 0
     * @var \StructType\Pay_GroupObjectType
     */
    public $Proposed_Pay_Group_Reference;
    /**
     * Constructor method for
     * Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setEffective_Date()
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setCompleted_On()
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setEvent_Corrected()
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setEvent_Rescinded()
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setOriginal_Pay_Group_Reference()
     * @uses Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType::setProposed_Pay_Group_Reference()
     * @param string $effective_Date
     * @param string $completed_On
     * @param bool $event_Corrected
     * @param bool $event_Rescinded
     * @param \StructType\Pay_GroupObjectType $original_Pay_Group_Reference
     * @param \StructType\Pay_GroupObjectType $proposed_Pay_Group_Reference
     */
    public function __construct($effective_Date = null, $completed_On = null, $event_Corrected = null, $event_Rescinded = null, \StructType\Pay_GroupObjectType $original_Pay_Group_Reference = null, \StructType\Pay_GroupObjectType $proposed_Pay_Group_Reference = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setCompleted_On($completed_On)
            ->setEvent_Corrected($event_Corrected)
            ->setEvent_Rescinded($event_Rescinded)
            ->setOriginal_Pay_Group_Reference($original_Pay_Group_Reference)
            ->setProposed_Pay_Group_Reference($proposed_Pay_Group_Reference);
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
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
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
     * Get Completed_On value
     * @return string|null
     */
    public function getCompleted_On()
    {
        return $this->Completed_On;
    }
    /**
     * Set Completed_On value
     * @param string $completed_On
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     */
    public function setCompleted_On($completed_On = null)
    {
        // validation for constraint: string
        if (!is_null($completed_On) && !is_string($completed_On)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completed_On, true), gettype($completed_On)), __LINE__);
        }
        $this->Completed_On = $completed_On;
        return $this;
    }
    /**
     * Get Event_Corrected value
     * @return bool|null
     */
    public function getEvent_Corrected()
    {
        return $this->Event_Corrected;
    }
    /**
     * Set Event_Corrected value
     * @param bool $event_Corrected
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     */
    public function setEvent_Corrected($event_Corrected = null)
    {
        // validation for constraint: boolean
        if (!is_null($event_Corrected) && !is_bool($event_Corrected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($event_Corrected, true), gettype($event_Corrected)), __LINE__);
        }
        $this->Event_Corrected = $event_Corrected;
        return $this;
    }
    /**
     * Get Event_Rescinded value
     * @return bool|null
     */
    public function getEvent_Rescinded()
    {
        return $this->Event_Rescinded;
    }
    /**
     * Set Event_Rescinded value
     * @param bool $event_Rescinded
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     */
    public function setEvent_Rescinded($event_Rescinded = null)
    {
        // validation for constraint: boolean
        if (!is_null($event_Rescinded) && !is_bool($event_Rescinded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($event_Rescinded, true), gettype($event_Rescinded)), __LINE__);
        }
        $this->Event_Rescinded = $event_Rescinded;
        return $this;
    }
    /**
     * Get Original_Pay_Group_Reference value
     * @return \StructType\Pay_GroupObjectType|null
     */
    public function getOriginal_Pay_Group_Reference()
    {
        return $this->Original_Pay_Group_Reference;
    }
    /**
     * Set Original_Pay_Group_Reference value
     * @param \StructType\Pay_GroupObjectType $original_Pay_Group_Reference
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     */
    public function setOriginal_Pay_Group_Reference(\StructType\Pay_GroupObjectType $original_Pay_Group_Reference = null)
    {
        $this->Original_Pay_Group_Reference = $original_Pay_Group_Reference;
        return $this;
    }
    /**
     * Get Proposed_Pay_Group_Reference value
     * @return \StructType\Pay_GroupObjectType|null
     */
    public function getProposed_Pay_Group_Reference()
    {
        return $this->Proposed_Pay_Group_Reference;
    }
    /**
     * Set Proposed_Pay_Group_Reference value
     * @param \StructType\Pay_GroupObjectType $proposed_Pay_Group_Reference
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
     */
    public function setProposed_Pay_Group_Reference(\StructType\Pay_GroupObjectType $proposed_Pay_Group_Reference = null)
    {
        $this->Proposed_Pay_Group_Reference = $proposed_Pay_Group_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Pay_Group_Assignment_Correct_or_Rescinded_Organization_DataType
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
