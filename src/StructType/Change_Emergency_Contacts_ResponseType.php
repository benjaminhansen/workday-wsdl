<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Emergency_Contacts_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for the change emergency contacts web service.
 * @subpackage Structs
 */
class Change_Emergency_Contacts_ResponseType extends AbstractStructBase
{
    /**
     * The Emergency_Contact_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event ID of the Emergency Contact Event
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Emergency_Contact_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Emergency_Contacts_ResponseType
     * @uses Change_Emergency_Contacts_ResponseType::setEmergency_Contact_Event_Reference()
     * @uses Change_Emergency_Contacts_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $emergency_Contact_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $emergency_Contact_Event_Reference = null, $version = null)
    {
        $this
            ->setEmergency_Contact_Event_Reference($emergency_Contact_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Emergency_Contact_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getEmergency_Contact_Event_Reference()
    {
        return $this->Emergency_Contact_Event_Reference;
    }
    /**
     * Set Emergency_Contact_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $emergency_Contact_Event_Reference
     * @return \StructType\Change_Emergency_Contacts_ResponseType
     */
    public function setEmergency_Contact_Event_Reference(\StructType\Unique_IdentifierObjectType $emergency_Contact_Event_Reference = null)
    {
        $this->Emergency_Contact_Event_Reference = $emergency_Contact_Event_Reference;
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
     * @return \StructType\Change_Emergency_Contacts_ResponseType
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
     * @return \StructType\Change_Emergency_Contacts_ResponseType
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
