<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Reference_ID_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Reference ID Request References
 * @subpackage Structs
 */
class Organization_Reference_ID_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Organization_Reference_ID_Reference
     * Meta information extracted from the WSDL
     * - documentation: Holds Organizations for which IDs are to be retrieved.
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Organization_Reference_ID_Reference;
    /**
     * Constructor method for Organization_Reference_ID_Request_ReferencesType
     * @uses Organization_Reference_ID_Request_ReferencesType::setOrganization_Reference_ID_Reference()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference_ID_Reference
     */
    public function __construct(array $organization_Reference_ID_Reference = array())
    {
        $this
            ->setOrganization_Reference_ID_Reference($organization_Reference_ID_Reference);
    }
    /**
     * Get Organization_Reference_ID_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getOrganization_Reference_ID_Reference()
    {
        return $this->Organization_Reference_ID_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference_ID_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference_ID_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_Reference_ID_ReferenceForArrayConstraintsFromSetOrganization_Reference_ID_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem) ? get_class($organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem), var_export($organization_Reference_ID_Request_ReferencesTypeOrganization_Reference_ID_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference_ID_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference_ID_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Request_ReferencesType
     */
    public function setOrganization_Reference_ID_Reference(array $organization_Reference_ID_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_Reference_ID_ReferenceArrayErrorMessage = self::validateOrganization_Reference_ID_ReferenceForArrayConstraintsFromSetOrganization_Reference_ID_Reference($organization_Reference_ID_Reference))) {
            throw new \InvalidArgumentException($organization_Reference_ID_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference_ID_Reference = $organization_Reference_ID_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Reference_ID_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Request_ReferencesType
     */
    public function addToOrganization_Reference_ID_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference_ID_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference_ID_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Reference_ID_Request_ReferencesType
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
