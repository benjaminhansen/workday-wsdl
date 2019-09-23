<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Put_Addresses_for_Country_Format_Extension_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response element containing Address reference.
 * @subpackage Structs
 */
class Put_Addresses_for_Country_Format_Extension_ResponseType extends AbstractStructBase
{
    /**
     * The Address_Reference
     * Meta information extracted from the WSDL
     * - documentation: Represents a unique instance of Address.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Address_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Put_Addresses_for_Country_Format_Extension_ResponseType
     * @uses Put_Addresses_for_Country_Format_Extension_ResponseType::setAddress_Reference()
     * @uses Put_Addresses_for_Country_Format_Extension_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $address_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $address_Reference = null, $version = null)
    {
        $this
            ->setAddress_Reference($address_Reference)
            ->setVersion($version);
    }
    /**
     * Get Address_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getAddress_Reference()
    {
        return $this->Address_Reference;
    }
    /**
     * Set Address_Reference value
     * @param \StructType\Unique_IdentifierObjectType $address_Reference
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_ResponseType
     */
    public function setAddress_Reference(\StructType\Unique_IdentifierObjectType $address_Reference = null)
    {
        $this->Address_Reference = $address_Reference;
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
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_ResponseType
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
     * @return \StructType\Put_Addresses_for_Country_Format_Extension_ResponseType
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
