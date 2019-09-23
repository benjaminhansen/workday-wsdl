<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reassign_Superior_to_Inactive_Organization_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for the 'Reassign Superior to Inactive Organization' web service.
 * @subpackage Structs
 */
class Reassign_Superior_to_Inactive_Organization_DataType extends AbstractStructBase
{
    /**
     * The Organization_Inactive_Reference
     * Meta information extracted from the WSDL
     * - documentation: The organization that is currently inactive and does not currently have a superior.
     * - minOccurs: 0
     * @var \StructType\OrganizationObjectType
     */
    public $Organization_Inactive_Reference;
    /**
     * Constructor method for Reassign_Superior_to_Inactive_Organization_DataType
     * @uses Reassign_Superior_to_Inactive_Organization_DataType::setOrganization_Inactive_Reference()
     * @param \StructType\OrganizationObjectType $organization_Inactive_Reference
     */
    public function __construct(\StructType\OrganizationObjectType $organization_Inactive_Reference = null)
    {
        $this
            ->setOrganization_Inactive_Reference($organization_Inactive_Reference);
    }
    /**
     * Get Organization_Inactive_Reference value
     * @return \StructType\OrganizationObjectType|null
     */
    public function getOrganization_Inactive_Reference()
    {
        return $this->Organization_Inactive_Reference;
    }
    /**
     * Set Organization_Inactive_Reference value
     * @param \StructType\OrganizationObjectType $organization_Inactive_Reference
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_DataType
     */
    public function setOrganization_Inactive_Reference(\StructType\OrganizationObjectType $organization_Inactive_Reference = null)
    {
        $this->Organization_Inactive_Reference = $organization_Inactive_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Reassign_Superior_to_Inactive_Organization_DataType
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
