<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Background_Check_Status_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains information on Background Check Event
 * @subpackage Structs
 */
class Change_Background_Check_Status_ResponseType extends AbstractStructBase
{
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: This element contains information on Background Check Event
     * - minOccurs: 0
     * @var \StructType\Background_Check_EventObjectType
     */
    public $Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Background_Check_Status_ResponseType
     * @uses Change_Background_Check_Status_ResponseType::setEvent_Reference()
     * @uses Change_Background_Check_Status_ResponseType::setVersion()
     * @param \StructType\Background_Check_EventObjectType $event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Background_Check_EventObjectType $event_Reference = null, $version = null)
    {
        $this
            ->setEvent_Reference($event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Event_Reference value
     * @return \StructType\Background_Check_EventObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \StructType\Background_Check_EventObjectType $event_Reference
     * @return \StructType\Change_Background_Check_Status_ResponseType
     */
    public function setEvent_Reference(\StructType\Background_Check_EventObjectType $event_Reference = null)
    {
        $this->Event_Reference = $event_Reference;
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
     * @return \StructType\Change_Background_Check_Status_ResponseType
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
     * @return \StructType\Change_Background_Check_Status_ResponseType
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
