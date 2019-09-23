<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location_Reference_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only Integration ID Reference or Location ID Reference is allowed for the Location Reference, but both are not allowed. | A valid instance of Location must exist for the given Integration ID Reference. | Reference element
 * representing a unique instance of Location.
 * @subpackage Structs
 */
class Location_Reference_WWSType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Integration ID reference is used as a unique identifier for integratable objects in the Workday system.
     * - minOccurs: 0
     * @var \StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * The Location_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Location must be of usage Business Site. | A reference to a location.
     * - minOccurs: 0
     * @var \StructType\LocationObjectType
     */
    public $Location_ID_Reference;
    /**
     * Constructor method for Location_Reference_WWSType
     * @uses Location_Reference_WWSType::setIntegration_ID_Reference()
     * @uses Location_Reference_WWSType::setLocation_ID_Reference()
     * @param \StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @param \StructType\LocationObjectType $location_ID_Reference
     */
    public function __construct(\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null, \StructType\LocationObjectType $location_ID_Reference = null)
    {
        $this
            ->setIntegration_ID_Reference($integration_ID_Reference)
            ->setLocation_ID_Reference($location_ID_Reference);
    }
    /**
     * Get Integration_ID_Reference value
     * @return \StructType\External_Integration_ID_Reference_DataType|null
     */
    public function getIntegration_ID_Reference()
    {
        return $this->Integration_ID_Reference;
    }
    /**
     * Set Integration_ID_Reference value
     * @param \StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @return \StructType\Location_Reference_WWSType
     */
    public function setIntegration_ID_Reference(\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
    {
        $this->Integration_ID_Reference = $integration_ID_Reference;
        return $this;
    }
    /**
     * Get Location_ID_Reference value
     * @return \StructType\LocationObjectType|null
     */
    public function getLocation_ID_Reference()
    {
        return $this->Location_ID_Reference;
    }
    /**
     * Set Location_ID_Reference value
     * @param \StructType\LocationObjectType $location_ID_Reference
     * @return \StructType\Location_Reference_WWSType
     */
    public function setLocation_ID_Reference(\StructType\LocationObjectType $location_ID_Reference = null)
    {
        $this->Location_ID_Reference = $location_ID_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Location_Reference_WWSType
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
