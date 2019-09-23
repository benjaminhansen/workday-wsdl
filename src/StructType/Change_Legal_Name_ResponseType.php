<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Change_Legal_Name_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Responds with the Event ID for the Legal Name Change Event.
 * @subpackage Structs
 */
class Change_Legal_Name_ResponseType extends AbstractStructBase
{
    /**
     * The Legal_Name_Change_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event ID of the Legal Name Change Event.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Legal_Name_Change_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Change_Legal_Name_ResponseType
     * @uses Change_Legal_Name_ResponseType::setLegal_Name_Change_Event_Reference()
     * @uses Change_Legal_Name_ResponseType::setVersion()
     * @param \StructType\Unique_IdentifierObjectType $legal_Name_Change_Event_Reference
     * @param string $version
     */
    public function __construct(\StructType\Unique_IdentifierObjectType $legal_Name_Change_Event_Reference = null, $version = null)
    {
        $this
            ->setLegal_Name_Change_Event_Reference($legal_Name_Change_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Legal_Name_Change_Event_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getLegal_Name_Change_Event_Reference()
    {
        return $this->Legal_Name_Change_Event_Reference;
    }
    /**
     * Set Legal_Name_Change_Event_Reference value
     * @param \StructType\Unique_IdentifierObjectType $legal_Name_Change_Event_Reference
     * @return \StructType\Change_Legal_Name_ResponseType
     */
    public function setLegal_Name_Change_Event_Reference(\StructType\Unique_IdentifierObjectType $legal_Name_Change_Event_Reference = null)
    {
        $this->Legal_Name_Change_Event_Reference = $legal_Name_Change_Event_Reference;
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
     * @return \StructType\Change_Legal_Name_ResponseType
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
     * @return \StructType\Change_Legal_Name_ResponseType
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
