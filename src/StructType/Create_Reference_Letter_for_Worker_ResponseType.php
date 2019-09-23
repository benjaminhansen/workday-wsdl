<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Create_Reference_Letter_for_Worker_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Create Reference Letter for Worker Response Element
 * @subpackage Structs
 */
class Create_Reference_Letter_for_Worker_ResponseType extends AbstractStructBase
{
    /**
     * The Reference_Letter_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference Letter Event Reference
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Reference_Letter_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Create_Reference_Letter_for_Worker_ResponseType
     * @uses Create_Reference_Letter_for_Worker_ResponseType::setReference_Letter_Event_Reference()
     * @uses Create_Reference_Letter_for_Worker_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $reference_Letter_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $reference_Letter_Event_Reference = null, $version = null)
    {
        $this
            ->setReference_Letter_Event_Reference($reference_Letter_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Reference_Letter_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getReference_Letter_Event_Reference()
    {
        return $this->Reference_Letter_Event_Reference;
    }
    /**
     * Set Reference_Letter_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $reference_Letter_Event_Reference
     * @return \StructType\Create_Reference_Letter_for_Worker_ResponseType
     */
    public function setReference_Letter_Event_Reference(\StructType\Unique_IdentifierObjectType $reference_Letter_Event_Reference = null)
    {
        $this->Reference_Letter_Event_Reference = $reference_Letter_Event_Reference;
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
     * @return \StructType\Create_Reference_Letter_for_Worker_ResponseType
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
     * @return \StructType\Create_Reference_Letter_for_Worker_ResponseType
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
