<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: References to specific Organizations to return
 * @subpackage Structs
 */
class Organization_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: References to specific Organizations to return
     * - maxOccurs: unbounded
     * @var \StructType\OrganizationObjectType[]
     */
    public $Organization_Reference;
    /**
     * The Skip_Non_Existing_Instances
     * @var bool
     */
    public $Skip_Non_Existing_Instances;
    /**
     * Constructor method for Organization_Request_ReferencesType
     * @uses Organization_Request_ReferencesType::setOrganization_Reference()
     * @uses Organization_Request_ReferencesType::setSkip_Non_Existing_Instances()
     * @param \StructType\OrganizationObjectType[] $organization_Reference
     * @param bool $skip_Non_Existing_Instances
     */
    public function __construct(array $organization_Reference = array(), $skip_Non_Existing_Instances = null)
    {
        $this
            ->setOrganization_Reference($organization_Reference)
            ->setSkip_Non_Existing_Instances($skip_Non_Existing_Instances);
    }
    /**
     * Get Organization_Reference value
     * @return \StructType\OrganizationObjectType[]|null
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
        foreach ($values as $organization_Request_ReferencesTypeOrganization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Request_ReferencesTypeOrganization_ReferenceItem instanceof \StructType\OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Request_ReferencesTypeOrganization_ReferenceItem) ? get_class($organization_Request_ReferencesTypeOrganization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Request_ReferencesTypeOrganization_ReferenceItem), var_export($organization_Request_ReferencesTypeOrganization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Organization_Reference property can only contain items of type \StructType\OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\OrganizationObjectType[] $organization_Reference
     * @return \StructType\Organization_Request_ReferencesType
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
     * @param \StructType\OrganizationObjectType $item
     * @return \StructType\Organization_Request_ReferencesType
     */
    public function addToOrganization_Reference(\StructType\OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Organization_Reference property can only contain items of type \StructType\OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Get Skip_Non_Existing_Instances value
     * @return bool|null
     */
    public function getSkip_Non_Existing_Instances()
    {
        return $this->Skip_Non_Existing_Instances;
    }
    /**
     * Set Skip_Non_Existing_Instances value
     * @param bool $skip_Non_Existing_Instances
     * @return \StructType\Organization_Request_ReferencesType
     */
    public function setSkip_Non_Existing_Instances($skip_Non_Existing_Instances = null)
    {
        // validation for constraint: boolean
        if (!is_null($skip_Non_Existing_Instances) && !is_bool($skip_Non_Existing_Instances)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skip_Non_Existing_Instances, true), gettype($skip_Non_Existing_Instances)), __LINE__);
        }
        $this->Skip_Non_Existing_Instances = $skip_Non_Existing_Instances;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Request_ReferencesType
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
