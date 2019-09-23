<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Name_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Request References
 * @subpackage Structs
 */
class Organization_Name_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: References to specific Organizations
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\OrganizationObjectType[]
     */
    public $Organization_Reference;
    /**
     * The Organization_Name_in_Effect_From
     * Meta information extracted from the WSDL
     * - documentation: The starting date of a date range. If Org Name In Effect From and Org Name In Effect To are empty, Workday retrieves the organization name as of the current date. If Org Name In Effect From and Org Name In Effect To are filled,
     * Workday retrieves the organization name effective within the date range. If Org Name In Effect From is filled and Org Name In Effect To is empty, Workday retrieves all organization names since Org Name In Effect From date. If Org Name In Effect From
     * is empty and Org Name In Effect To is filled, Workday retrieves all organization names up to Org Name In Effect To date.A new effective-dated organization name is automatically created if any attributes used for organization name are different as of
     * specified effective date which include: Organization Name, Organization Code, and Include 'xx' in Name booleans.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name_in_Effect_From;
    /**
     * The Organization_Name_in_Effect_To
     * Meta information extracted from the WSDL
     * - documentation: The end date of a date range. Refer to field description for "Org Name In Effect From" for how these two dates work together.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name_in_Effect_To;
    /**
     * Constructor method for Organization_Name_Request_ReferencesType
     * @uses Organization_Name_Request_ReferencesType::setOrganization_Reference()
     * @uses Organization_Name_Request_ReferencesType::setOrganization_Name_in_Effect_From()
     * @uses Organization_Name_Request_ReferencesType::setOrganization_Name_in_Effect_To()
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference
     * @param string $organization_Name_in_Effect_From
     * @param string $organization_Name_in_Effect_To
     */
    public function __construct(array $organization_Reference = array(), $organization_Name_in_Effect_From = null, $organization_Name_in_Effect_To = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setOrganization_Name_in_Effect_From($organization_Name_in_Effect_From)
            ->setOrganization_Name_in_Effect_To($organization_Name_in_Effect_To);
    }
    /**
     * Get Organization_Reference value
     * @return \WorkdayWsdl\\StructType\OrganizationObjectType[]|null
     */
    public function getOrganization_Reference()
    {
        return $this->Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setOrganization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrganization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Name_Request_ReferencesTypeOrganization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Name_Request_ReferencesTypeOrganization_ReferenceItem instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Name_Request_ReferencesTypeOrganization_ReferenceItem) ? get_class($organization_Name_Request_ReferencesTypeOrganization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Name_Request_ReferencesTypeOrganization_ReferenceItem), var_export($organization_Name_Request_ReferencesTypeOrganization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType[] $organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Name_Request_ReferencesType
     */
    public function setOrganization_Reference(array $organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($organization_ReferenceArrayErrorMessage = self::validateOrganization_ReferenceForArrayConstraintsFromSetOrganization_Reference($organization_Reference))) {
            throw new \InvalidArgumentException($organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Organization_Reference = $organization_Reference;
        return $this;
    }
    /**
     * Add item to Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Name_Request_ReferencesType
     */
    public function addToOrganization_Reference(\WorkdayWsdl\\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Organization_Name_in_Effect_From value
     * @return string|null
     */
    public function getOrganization_Name_in_Effect_From()
    {
        return $this->Organization_Name_in_Effect_From;
    }
    /**
     * Set Organization_Name_in_Effect_From value
     * @param string $organization_Name_in_Effect_From
     * @return \WorkdayWsdl\\StructType\Organization_Name_Request_ReferencesType
     */
    public function setOrganization_Name_in_Effect_From($organization_Name_in_Effect_From = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name_in_Effect_From) && !is_string($organization_Name_in_Effect_From)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name_in_Effect_From, true), gettype($organization_Name_in_Effect_From)), __LINE__);
        }
        $this->Organization_Name_in_Effect_From = $organization_Name_in_Effect_From;
        return $this;
    }
    /**
     * Get Organization_Name_in_Effect_To value
     * @return string|null
     */
    public function getOrganization_Name_in_Effect_To()
    {
        return $this->Organization_Name_in_Effect_To;
    }
    /**
     * Set Organization_Name_in_Effect_To value
     * @param string $organization_Name_in_Effect_To
     * @return \WorkdayWsdl\\StructType\Organization_Name_Request_ReferencesType
     */
    public function setOrganization_Name_in_Effect_To($organization_Name_in_Effect_To = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name_in_Effect_To) && !is_string($organization_Name_in_Effect_To)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name_in_Effect_To, true), gettype($organization_Name_in_Effect_To)), __LINE__);
        }
        $this->Organization_Name_in_Effect_To = $organization_Name_in_Effect_To;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Name_Request_ReferencesType
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
