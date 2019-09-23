<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Establishment_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Assign establishment response element containing the newly created assign establishment event reference
 * @subpackage Structs
 */
class Assign_Establishment_ResponseType extends AbstractStructBase
{
    /**
     * The Assign_Establishment_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The assign establishment event created to process the request
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Assign_Establishment_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Establishment_ResponseType
     * @uses Assign_Establishment_ResponseType::setAssign_Establishment_Event_Reference()
     * @uses Assign_Establishment_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $assign_Establishment_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $assign_Establishment_Event_Reference = null, $version = null)
    {
        $this
            ->setAssign_Establishment_Event_Reference($assign_Establishment_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Assign_Establishment_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getAssign_Establishment_Event_Reference()
    {
        return $this->Assign_Establishment_Event_Reference;
    }
    /**
     * Set Assign_Establishment_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $assign_Establishment_Event_Reference
     * @return \StructType\Assign_Establishment_ResponseType
     */
    public function setAssign_Establishment_Event_Reference(\StructType\Unique_IdentifierObjectType $assign_Establishment_Event_Reference = null)
    {
        $this->Assign_Establishment_Event_Reference = $assign_Establishment_Event_Reference;
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
     * @return \StructType\Assign_Establishment_ResponseType
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
     * @return \StructType\Assign_Establishment_ResponseType
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
