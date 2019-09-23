<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business_Process_Type_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Business Process Type does not exist for Business Process Type Name! | Reference element representing a unique instance of Event Type (e.g. Hire Employee Event, Change Address Event, etc.).
 * @subpackage Structs
 */
class Business_Process_Type_Reference_DataType extends AbstractStructBase
{
    /**
     * The Event_Type_Name
     * Meta information extracted from the WSDL
     * - documentation: Testing WS Word Bucket edit
     * - maxOccurs: 1
     * @var string
     */
    public $Event_Type_Name;
    /**
     * Constructor method for Business_Process_Type_Reference_DataType
     * @uses Business_Process_Type_Reference_DataType::setEvent_Type_Name()
     * @param string $event_Type_Name
     */
    public function __construct($event_Type_Name = null)
    {
        $this
            ->setEvent_Type_Name($event_Type_Name);
    }
    /**
     * Get Event_Type_Name value
     * @return string|null
     */
    public function getEvent_Type_Name()
    {
        return $this->Event_Type_Name;
    }
    /**
     * Set Event_Type_Name value
     * @param string $event_Type_Name
     * @return \WorkdayWsdl\\StructType\Business_Process_Type_Reference_DataType
     */
    public function setEvent_Type_Name($event_Type_Name = null)
    {
        // validation for constraint: string
        if (!is_null($event_Type_Name) && !is_string($event_Type_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($event_Type_Name, true), gettype($event_Type_Name)), __LINE__);
        }
        $this->Event_Type_Name = $event_Type_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Business_Process_Type_Reference_DataType
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
