<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Container_Organization_Reference_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This container organization is configured to not allow locations to be included in it. | Reference element representing a unique instance of Organization that contains or includes other Organizations. An organization can be included
 * in multiple hierarchies, but it can only be included in one node in each top level hierarchy for any given effective date.
 * @subpackage Structs
 */
class Container_Organization_Reference_DataType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * @var \StructType\Organization_ReferenceType
     */
    public $Organization_Reference;
    /**
     * Constructor method for Container_Organization_Reference_DataType
     * @uses Container_Organization_Reference_DataType::setOrganization_Reference()
     * @param \StructType\Organization_ReferenceType $organization_Reference
     */
    public function __construct(\StructType\Organization_ReferenceType $organization_Reference = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\Organization_ReferenceType|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * Set Organization_Reference value
     * @param \StructType\Organization_ReferenceType $organization_Reference
     * @return \StructType\Container_Organization_Reference_DataType
     */
    public function setOrganization_Reference(\StructType\Organization_ReferenceType $organization_Reference = null)
    {
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Container_Organization_Reference_DataType
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
