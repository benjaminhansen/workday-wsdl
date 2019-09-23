<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reassign_Superior_to_Inactive_Organization_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Responds with the Event ID for the Assign Superior Event.
 * @subpackage Structs
 */
class Reassign_Superior_to_Inactive_Organization_ResponseType extends AbstractStructBase
{
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Responds with the Event ID for the Assign Superior Event.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
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
     * Constructor method for Reassign_Superior_to_Inactive_Organization_ResponseType
     * @uses Reassign_Superior_to_Inactive_Organization_ResponseType::setEvent_Reference()
     * @uses Reassign_Superior_to_Inactive_Organization_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $event_Reference = null, $version = null)
    {
        $this
            ->setEvent_Reference($event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $event_Reference
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_ResponseType
     */
    public function setEvent_Reference(\StructType\Unique_IdentifierObjectType $event_Reference = null)
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
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_ResponseType
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
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_ResponseType
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
