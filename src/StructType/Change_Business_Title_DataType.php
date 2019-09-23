<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Business_Title_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for the data changed in the Change Business Title business process.
 * @subpackage Structs
 */
class Change_Business_Title_DataType extends AbstractStructBase
{
    /**
     * The Event_Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Contains the date of the Change Business Title event.
     * - maxOccurs: 1
     * @var string
     */
    public $Event_Effective_Date;
    /**
     * The Proposed_Business_Title
     * Meta information extracted from the WSDL
     * - documentation: Proposed business title for the worker in Change Business Title Web Service.
     * - maxOccurs: 1
     * @var string
     */
    public $Proposed_Business_Title;
    /**
     * Constructor method for Change_Business_Title_DataType
     * @uses Change_Business_Title_DataType::setEvent_Effective_Date()
     * @uses Change_Business_Title_DataType::setProposed_Business_Title()
     * @param string $event_Effective_Date
     * @param string $proposed_Business_Title
     */
    public function __construct($event_Effective_Date = null, $proposed_Business_Title = null)
    {
        $this
            ->setEvent_Effective_Date($event_Effective_Date)
            ->setProposed_Business_Title($proposed_Business_Title);
    }
    /**
     * Get Event_Effective_Date value
     * @return string|null
     */
    public function getEvent_Effective_Date()
    {
        return $this->Event_Effective_Date;
    }
    /**
     * Set Event_Effective_Date value
     * @param string $event_Effective_Date
     * @return \StructType\Change_Business_Title_DataType
     */
    public function setEvent_Effective_Date($event_Effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($event_Effective_Date) && !is_string($event_Effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event_Effective_Date, true), gettype($event_Effective_Date)), __LINE__);
        }
        $this->Event_Effective_Date = $event_Effective_Date;
        return $this;
    }
    /**
     * Get Proposed_Business_Title value
     * @return string|null
     */
    public function getProposed_Business_Title()
    {
        return $this->Proposed_Business_Title;
    }
    /**
     * Set Proposed_Business_Title value
     * @param string $proposed_Business_Title
     * @return \StructType\Change_Business_Title_DataType
     */
    public function setProposed_Business_Title($proposed_Business_Title = null)
    {
        // validation for constraint: string
        if (!is_null($proposed_Business_Title) && !is_string($proposed_Business_Title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposed_Business_Title, true), gettype($proposed_Business_Title)), __LINE__);
        }
        $this->Proposed_Business_Title = $proposed_Business_Title;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Change_Business_Title_DataType
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
