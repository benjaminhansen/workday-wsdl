<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for End_Collective_Agreement_Assignment_Event_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response Element consisting of End Collective Agreement Assignment Event reference
 * @subpackage Structs
 */
class End_Collective_Agreement_Assignment_Event_ResponseType extends AbstractStructBase
{
    /**
     * The End_Collective_Agreement_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: The reference to the generated End Collective Agreement Assignment Event
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $End_Collective_Agreement_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for End_Collective_Agreement_Assignment_Event_ResponseType
     * @uses End_Collective_Agreement_Assignment_Event_ResponseType::setEnd_Collective_Agreement_Event_Reference()
     * @uses End_Collective_Agreement_Assignment_Event_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $end_Collective_Agreement_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $end_Collective_Agreement_Event_Reference = null, $version = null)
    {
        $this
            ->setEnd_Collective_Agreement_Event_Reference($end_Collective_Agreement_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get End_Collective_Agreement_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getEnd_Collective_Agreement_Event_Reference()
    {
        return $this->End_Collective_Agreement_Event_Reference;
    }
    /**
     * Set End_Collective_Agreement_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $end_Collective_Agreement_Event_Reference
     * @return \WorkdayWsdl\\StructType\End_Collective_Agreement_Assignment_Event_ResponseType
     */
    public function setEnd_Collective_Agreement_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $end_Collective_Agreement_Event_Reference = null)
    {
        $this->End_Collective_Agreement_Event_Reference = $end_Collective_Agreement_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\End_Collective_Agreement_Assignment_Event_ResponseType
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
     * @return \WorkdayWsdl\\StructType\End_Collective_Agreement_Assignment_Event_ResponseType
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
