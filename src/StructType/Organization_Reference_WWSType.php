<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Reference_WWSType StructType
 * Meta information extracted from the WSDL
 * - documentation: Only Integration ID Reference or Organization ID Reference is allowed for the Organization Reference, but both are not allowed. | A valid instance of Organization must exist for the given Integration ID Reference. | Reference element
 * representing a unique instance of Organization.
 * @subpackage Structs
 */
class Organization_Reference_WWSType extends AbstractStructBase
{
    /**
     * The Integration_ID_Reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType
     */
    public $Integration_ID_Reference;
    /**
     * The Organization_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Contains a reference to the organization.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType
     */
    public $Organization_ID_Reference;
    /**
     * Constructor method for Organization_Reference_WWSType
     * @uses Organization_Reference_WWSType::setIntegration_ID_Reference()
     * @uses Organization_Reference_WWSType::setOrganization_ID_Reference()
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_ID_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null, \WorkdayWsdl\\StructType\OrganizationObjectType $organization_ID_Reference = null)
    {
        $this
            ->setIntegration_ID_Reference($integration_ID_Reference)
            ->setOrganization_ID_Reference($organization_ID_Reference);
    }
    /**
     * Get Integration_ID_Reference value
     * @return \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType|null
     */
    public function getIntegration_ID_Reference()
    {
        return $this->Integration_ID_Reference;
    }
    /**
     * Set Integration_ID_Reference value
     * @param \WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Reference_WWSType
     */
    public function setIntegration_ID_Reference(\WorkdayWsdl\\StructType\External_Integration_ID_Reference_DataType $integration_ID_Reference = null)
    {
        $this->Integration_ID_Reference = $integration_ID_Reference;
        return $this;
    }
    /**
     * Get Organization_ID_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType|null
     */
    public function getOrganization_ID_Reference()
    {
        return $this->Organization_ID_Reference;
    }
    /**
     * Set Organization_ID_Reference value
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $organization_ID_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Reference_WWSType
     */
    public function setOrganization_ID_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $organization_ID_Reference = null)
    {
        $this->Organization_ID_Reference = $organization_ID_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Reference_WWSType
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
