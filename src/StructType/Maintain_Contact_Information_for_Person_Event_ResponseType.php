<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Maintain_Contact_Information_for_Person_Event_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: The Contact Information for Person Event created by the corresponding request
 * @subpackage Structs
 */
class Maintain_Contact_Information_for_Person_Event_ResponseType extends AbstractStructBase
{
    /**
     * The Contact_Information_for_Person_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Contact Information for Person Event created by the corresponding request
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Contact_Information_for_Person_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for
     * Maintain_Contact_Information_for_Person_Event_ResponseType
     * @uses Maintain_Contact_Information_for_Person_Event_ResponseType::setContact_Information_for_Person_Event_Reference()
     * @uses Maintain_Contact_Information_for_Person_Event_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $contact_Information_for_Person_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $contact_Information_for_Person_Event_Reference = null, $version = null)
    {
        $this
            ->setContact_Information_for_Person_Event_Reference($contact_Information_for_Person_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Contact_Information_for_Person_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getContact_Information_for_Person_Event_Reference()
    {
        return $this->Contact_Information_for_Person_Event_Reference;
    }
    /**
     * Set Contact_Information_for_Person_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $contact_Information_for_Person_Event_Reference
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_ResponseType
     */
    public function setContact_Information_for_Person_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $contact_Information_for_Person_Event_Reference = null)
    {
        $this->Contact_Information_for_Person_Event_Reference = $contact_Information_for_Person_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Maintain_Contact_Information_for_Person_Event_ResponseType
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
