<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * Organization_Assignment_Restrictions_Request_ReferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Assignment Restrictions Request References
 * @subpackage Structs
 */
class Organization_Assignment_Restrictions_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Supervisory_Organization_Reference
     * Meta information extracted from the WSDL
     * - documentation: Supervisory Organization Reference
     * - maxOccurs: unbounded
     * @var \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[]
     */
    public $Supervisory_Organization_Reference;
    /**
     * Constructor method for
     * Organization_Assignment_Restrictions_Request_ReferencesType
     * @uses Organization_Assignment_Restrictions_Request_ReferencesType::setSupervisory_Organization_Reference()
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[] $supervisory_Organization_Reference
     */
    public function __construct(array $supervisory_Organization_Reference = array())
    {
        $this
            ->setSupervisory_Organization_Reference($supervisory_Organization_Reference);
    }
    /**
     * Get Supervisory_Organization_Reference value
     * @return \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[]|null
     */
    public function getSupervisory_Organization_Reference()
    {
        return $this->Supervisory_Organization_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSupervisory_Organization_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupervisory_Organization_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupervisory_Organization_ReferenceForArrayConstraintsFromSetSupervisory_Organization_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem) {
            // validation for constraint: itemType
            if (!$organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem instanceof \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType) {
                $invalidValues[] = is_object($organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem) ? get_class($organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem) : sprintf('%s(%s)', gettype($organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem), var_export($organization_Assignment_Restrictions_Request_ReferencesTypeSupervisory_Organization_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Supervisory_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Supervisory_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType[] $supervisory_Organization_Reference
     * @return \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_Request_ReferencesType
     */
    public function setSupervisory_Organization_Reference(array $supervisory_Organization_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($supervisory_Organization_ReferenceArrayErrorMessage = self::validateSupervisory_Organization_ReferenceForArrayConstraintsFromSetSupervisory_Organization_Reference($supervisory_Organization_Reference))) {
            throw new \InvalidArgumentException($supervisory_Organization_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Supervisory_Organization_Reference = $supervisory_Organization_Reference;
        return $this;
    }
    /**
     * Add item to Supervisory_Organization_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType $item
     * @return \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_Request_ReferencesType
     */
    public function addToSupervisory_Organization_Reference(\WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType) {
            throw new \InvalidArgumentException(sprintf('The Supervisory_Organization_Reference property can only contain items of type \WorkdayWsdl\\StructType\Supervisory_OrganizationObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Supervisory_Organization_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Organization_Assignment_Restrictions_Request_ReferencesType
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
