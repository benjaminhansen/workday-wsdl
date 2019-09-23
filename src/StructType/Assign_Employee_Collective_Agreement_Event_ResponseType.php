<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_Employee_Collective_Agreement_Event_ResponseType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for the Assign Collective Agreement Event
 * @subpackage Structs
 */
class Assign_Employee_Collective_Agreement_Event_ResponseType extends AbstractStructBase
{
    /**
     * The Assign_Employee_Collective_Agreement_Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Returns the instance ID of the Collective Agreement event that has been added to the Worker
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Assign_Employee_Collective_Agreement_Event_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Assign_Employee_Collective_Agreement_Event_ResponseType
     * @uses Assign_Employee_Collective_Agreement_Event_ResponseType::setAssign_Employee_Collective_Agreement_Event_Reference()
     * @uses Assign_Employee_Collective_Agreement_Event_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference = null, $version = null)
    {
        $this
            ->setAssign_Employee_Collective_Agreement_Event_Reference($assign_Employee_Collective_Agreement_Event_Reference)
            ->setVersion($version);
    }
    /**
     * Get Assign_Employee_Collective_Agreement_Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getAssign_Employee_Collective_Agreement_Event_Reference()
    {
        return $this->Assign_Employee_Collective_Agreement_Event_Reference;
    }
    /**
     * Set Assign_Employee_Collective_Agreement_Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_ResponseType
     */
    public function setAssign_Employee_Collective_Agreement_Event_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $assign_Employee_Collective_Agreement_Event_Reference = null)
    {
        $this->Assign_Employee_Collective_Agreement_Event_Reference = $assign_Employee_Collective_Agreement_Event_Reference;
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
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_ResponseType
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
     * @return \WorkdayWsdl\\StructType\Assign_Employee_Collective_Agreement_Event_ResponseType
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
